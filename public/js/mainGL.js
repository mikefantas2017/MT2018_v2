﻿/*
Mon Tool v1.
Marzo, 2018.
Funciones para graficación de modelos.
*/

// Vertex shader.
var VSHADER_SOURCE =
	'attribute vec4 a_Position;\n' +
	'void main(){\n' +
	'	gl_Position = a_Position;\n' +
	'	gl_PointSize = 5.0;\n' +
	'}\n';

// Fragment shader.
var FSHADER_SOURCE =
	'void main(){\n' +
	'	gl_FragColor = vec4(0.0, 0.0, 0.0, 1.0);\n' +
	'}\n';

function displayModel() {
    // Obtención del contexto webgl.
    var gl = getWebGLContext($("#gl")[0]);
    if (!gl) {
        console.log("WebGL no soportado.");
        return;
    }
    
    // Inicialización de shaders.
    if (!initShaders(gl, VSHADER_SOURCE, FSHADER_SOURCE)) {
        console.log("No se han podido inicializar los shaders.");
        return;
    }

    // Inicializar los buffers de vértices.
    var n = initVertexBuffers(gl);
    if (n < 0) {
        console.log("No se puede inicializar la posición de los vértices.");
        return;
    }

    // Resize canvas.
	resizeCanvas(gl.canvas);
    gl.viewport(0, 0, gl.canvas.width, gl.canvas.height);
    
    // Desplegar modelo.
    gl.clearColor(1.0, 1.0, 1.0, 1.0);
    gl.clear(gl.COLOR_BUFFER_BIT);
    gl.drawArrays(gl.POINTS, 0, n);
}

function initVertexBuffers(gl) {
    var vertices = new Float32Array([
        0.0, 0.5,   -0.5, -0.5,     0.5, -0.5
    ]);
    var n = 3;
    var vertexBuffer = gl.createBuffer();

    if (!vertexBuffer) {
        console.log("No se puede crear el objeto buffer.");
        return -1;
    }
    gl.bindBuffer(gl.ARRAY_BUFFER, vertexBuffer);
    gl.bufferData(gl.ARRAY_BUFFER, vertices, gl.STATIC_DRAW);

    var a_Position = gl.getAttribLocation(gl.program, 'a_Position');
    if (a_Position < 0) {
        console.log("No se puede obtener la ubicación de a_Position.");
        return;
    }
    gl.vertexAttribPointer(a_Position, 2, gl.FLOAT, false, 0, 0);
    gl.enableVertexAttribArray(a_Position);
    return n;
}

function resizeCanvas(canvas){
	var displaySize = [canvas.clientWidth, canvas.clientHeight];
	if(canvas.width != displaySize[0] || canvas.height != displaySize[1]){
		canvas.width = displaySize[0];
		canvas.height = displaySize[1];
		console.log(canvas.width + '; ' + canvas.height);
	}
}