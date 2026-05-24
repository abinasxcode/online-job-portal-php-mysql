/**
 * 3D Interactive Globe - Hire Loop
 * Three.js globe with city connections, atmosphere glow, mouse parallax
 */
(function(){
  'use strict';
  var container = document.getElementById('globe-container');
  if(!container) return;

  var isMobile = window.innerWidth < 768;
  if(isMobile){ container.style.display='none'; return; }

  var R = 100; // globe radius

  // Cities [lat, lng]
  var cities = [
    [28.61,77.21],[19.08,72.88],[13.08,80.27],[22.57,88.36],
    [12.97,77.59],[17.39,78.49],[23.02,72.57],[26.91,75.79],
    [40.71,-74.01],[51.51,-0.13],[35.68,139.65],[1.35,103.82],
    [-33.87,151.21],[25.20,55.27],[48.86,2.35],[37.77,-122.42],
    [55.76,37.62],[-23.55,-46.63],[31.23,121.47],[39.90,116.41],
    [30.04,31.24],[41.01,28.98],[-1.29,36.82],[43.65,-79.38],[52.52,13.40]
  ];

  // Connection pairs (city indices)
  var conns = [
    [0,8],[0,9],[1,13],[4,11],[0,10],[8,14],[9,16],[15,10],
    [8,17],[12,11],[18,10],[13,20],[9,23],[14,24],[3,19],[5,13]
  ];

  function ll2xyz(lat,lng,r){
    var phi=(90-lat)*Math.PI/180, theta=(lng+180)*Math.PI/180;
    return new THREE.Vector3(
      -(r*Math.sin(phi)*Math.cos(theta)),
      r*Math.cos(phi),
      r*Math.sin(phi)*Math.sin(theta)
    );
  }

  // Scene
  var scene = new THREE.Scene();
  var w = container.offsetWidth, h = container.offsetHeight;
  var camera = new THREE.PerspectiveCamera(45, w/h, 0.1, 1000);
  camera.position.z = 280;

  var renderer = new THREE.WebGLRenderer({alpha:true, antialias:true});
  renderer.setSize(w, h);
  renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
  renderer.setClearColor(0x000000, 0);
  container.appendChild(renderer.domElement);

  var group = new THREE.Group();
  scene.add(group);

  // Inner solid sphere
  group.add(new THREE.Mesh(
    new THREE.SphereGeometry(R*0.98, 48, 48),
    new THREE.MeshBasicMaterial({color:0x12101f, transparent:true, opacity:0.85, side:THREE.BackSide})
  ));

  // Wireframe globe
  group.add(new THREE.Mesh(
    new THREE.SphereGeometry(R, 48, 48),
    new THREE.MeshBasicMaterial({color:0x7c6df0, wireframe:true, transparent:true, opacity:0.07})
  ));

  // Latitude/longitude grid rings
  [0,30,60,-30,-60].forEach(function(lat){
    var pts=[];
    for(var i=0;i<=64;i++) pts.push(ll2xyz(lat, i*360/64, R*1.002));
    var g=new THREE.BufferGeometry().setFromPoints(pts);
    group.add(new THREE.Line(g, new THREE.LineBasicMaterial({color:0x7c6df0, transparent:true, opacity:0.06})));
  });
  [0,30,60,90,120,150,-30,-60,-90,-120,-150,-180].forEach(function(lng){
    var pts=[];
    for(var i=0;i<=64;i++) pts.push(ll2xyz(i*180/64-90, lng, R*1.002));
    var g=new THREE.BufferGeometry().setFromPoints(pts);
    group.add(new THREE.Line(g, new THREE.LineBasicMaterial({color:0x7c6df0, transparent:true, opacity:0.04})));
  });

  // Atmosphere glow
  var atmosGeo = new THREE.SphereGeometry(R*1.18, 48, 48);
  var atmosMat = new THREE.ShaderMaterial({
    vertexShader: 'varying vec3 vNormal; void main(){ vNormal=normalize(normalMatrix*normal); gl_Position=projectionMatrix*modelViewMatrix*vec4(position,1.0); }',
    fragmentShader: 'varying vec3 vNormal; void main(){ float i=pow(0.62-dot(vNormal,vec3(0,0,1)),2.5); gl_FragColor=vec4(0.486,0.427,0.941,1.0)*i; }',
    blending: THREE.AdditiveBlending,
    side: THREE.BackSide,
    transparent: true
  });
  group.add(new THREE.Mesh(atmosGeo, atmosMat));

  // City dots
  var cityPos = cities.map(function(c){ return ll2xyz(c[0],c[1],R*1.01); });
  var dotPositions=[], dotColors=[];
  cityPos.forEach(function(p){
    dotPositions.push(p.x,p.y,p.z);
    dotColors.push(0.37,0.84,0.77); // teal #5eead4
  });
  var dotGeo = new THREE.BufferGeometry();
  dotGeo.setAttribute('position', new THREE.Float32BufferAttribute(dotPositions,3));
  dotGeo.setAttribute('color', new THREE.Float32BufferAttribute(dotColors,3));
  group.add(new THREE.Points(dotGeo, new THREE.PointsMaterial({
    size:3.5, vertexColors:true, transparent:true, opacity:0.95,
    sizeAttenuation:true, depthWrite:false
  })));

  // Glow rings around dots
  cityPos.forEach(function(p){
    var ringGeo = new THREE.RingGeometry(2, 5, 16);
    var ringMat = new THREE.MeshBasicMaterial({color:0x5eead4, transparent:true, opacity:0.2, side:THREE.DoubleSide});
    var ring = new THREE.Mesh(ringGeo, ringMat);
    ring.position.copy(p);
    ring.lookAt(new THREE.Vector3(0,0,0));
    ring._baseOpacity = 0.15 + Math.random()*0.1;
    ring._pulseSpeed = 0.02 + Math.random()*0.02;
    ring._pulsePhase = Math.random()*Math.PI*2;
    group.add(ring);
  });

  // Connection arcs
  var arcMeshes = [];
  conns.forEach(function(pair){
    if(pair[0]>=cityPos.length||pair[1]>=cityPos.length) return;
    var start = cityPos[pair[0]], end = cityPos[pair[1]];
    var mid = start.clone().add(end).multiplyScalar(0.5);
    var dist = start.distanceTo(end);
    mid.normalize().multiplyScalar(R + dist*0.4);

    var curve = new THREE.QuadraticBezierCurve3(start, mid, end);
    var points = curve.getPoints(60);
    var geo = new THREE.BufferGeometry().setFromPoints(points);
    var mat = new THREE.LineBasicMaterial({color:0xa78bfa, transparent:true, opacity:0.35});
    var line = new THREE.Line(geo, mat);
    group.add(line);
    arcMeshes.push({line:line, points:points, progress:Math.random()});
  });

  // Traveling light dots on arcs
  var travelDots = [];
  arcMeshes.forEach(function(arc){
    var dotGeo2 = new THREE.SphereGeometry(1.2, 8, 8);
    var dotMat2 = new THREE.MeshBasicMaterial({color:0x5eead4, transparent:true, opacity:0.9});
    var dot = new THREE.Mesh(dotGeo2, dotMat2);
    dot._arc = arc;
    dot._t = Math.random();
    dot._speed = 0.003 + Math.random()*0.003;
    group.add(dot);
    travelDots.push(dot);
  });

  // Mouse tracking
  var mouse = {x:0, y:0};
  document.addEventListener('mousemove', function(e){
    mouse.x = (e.clientX/window.innerWidth)*2-1;
    mouse.y = (e.clientY/window.innerHeight)*2-1;
  });

  // Starfield background
  var starGeo = new THREE.BufferGeometry();
  var starPos = [];
  for(var i=0;i<800;i++){
    starPos.push((Math.random()-0.5)*1200, (Math.random()-0.5)*800, (Math.random()-0.5)*600-200);
  }
  starGeo.setAttribute('position', new THREE.Float32BufferAttribute(starPos,3));
  scene.add(new THREE.Points(starGeo, new THREE.PointsMaterial({color:0xc4b5fd, size:0.8, transparent:true, opacity:0.4})));

  // Initial tilt
  group.rotation.x = 0.3;
  group.rotation.z = 0.1;

  // Animate
  var clock = new THREE.Clock();
  function animate(){
    requestAnimationFrame(animate);
    var t = clock.getElapsedTime();

    // Auto rotate
    group.rotation.y += 0.0018;

    // Mouse parallax
    group.rotation.x += (mouse.y*0.25 + 0.3 - group.rotation.x)*0.015;
    var targetZ = mouse.x * -0.15 + 0.1;
    group.rotation.z += (targetZ - group.rotation.z)*0.015;

    // Pulse city rings
    group.children.forEach(function(child){
      if(child._pulseSpeed){
        child.material.opacity = child._baseOpacity + Math.sin(t*child._pulseSpeed*60 + child._pulsePhase)*0.08;
        child.scale.setScalar(1 + Math.sin(t*child._pulseSpeed*40 + child._pulsePhase)*0.15);
      }
    });

    // Animate traveling dots
    travelDots.forEach(function(dot){
      dot._t += dot._speed;
      if(dot._t > 1) dot._t = 0;
      var pts = dot._arc.points;
      var idx = Math.floor(dot._t * (pts.length-1));
      if(idx < pts.length){
        dot.position.copy(pts[idx]);
        dot.material.opacity = Math.sin(dot._t * Math.PI)*0.9;
      }
    });

    renderer.render(scene, camera);
  }
  animate();

  // Resize
  window.addEventListener('resize', function(){
    if(window.innerWidth < 768){ container.style.display='none'; return; }
    container.style.display='';
    var w2=container.offsetWidth, h2=container.offsetHeight;
    camera.aspect=w2/h2;
    camera.updateProjectionMatrix();
    renderer.setSize(w2, h2);
  });
})();
