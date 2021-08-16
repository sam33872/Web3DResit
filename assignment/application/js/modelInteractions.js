

// change through wireframe
function wireframe()
{
	var e = document.getElementById('wire');
	e.runtime.togglePoints(true);
	e.runtime.togglePoints(true);

	if (document.getElementById('renderSwitch').innerHTML == 'Default') {
		document.getElementById('renderSwitch').innerHTML = 'Wireframe';
	}
	else if (document.getElementById('renderSwitch').innerHTML == 'Wireframe') {
		document.getElementById('renderSwitch').innerHTML = 'Dots';
	}
	else if (document.getElementById('renderSwitch').innerHTML == 'Dots') {
		document.getElementById('renderSwitch').innerHTML = 'Default';
	}
}

// Turn off light 1
function toggleOmni2() {
	if (document.getElementById('model__Omni002').getAttribute('intensity') != '0.8')
		document.getElementById('model__Omni002').setAttribute('intensity', '0.8');
	else
		document.getElementById('model__Omni002').setAttribute('intensity', '0');
}
// Turn off light 2
function toggleOmni3() {
	if (document.getElementById('model__Omni003').getAttribute('intensity') != '0.8')
		document.getElementById('model__Omni003').setAttribute('intensity', '0.8');
	else
		document.getElementById('model__Omni003').setAttribute('intensity', '0');
}
// Turn off light 3
function toggleOmni4() {
	if (document.getElementById('model__Omni004').getAttribute('intensity') != '0.8')
		document.getElementById('model__Omni004').setAttribute('intensity', '0.8');
	else
		document.getElementById('model__Omni004').setAttribute('intensity', '0');
}
// Turn off light 4
function toggleOmni5() {
	if (document.getElementById('model__Omni005').getAttribute('intensity') != '0.8')
		document.getElementById('model__Omni005').setAttribute('intensity', '0.8');
	else
		document.getElementById('model__Omni005').setAttribute('intensity', '0');
}
// Turn off light 5
function toggleOmni6() {
	if (document.getElementById('model__Omni006').getAttribute('intensity') != '0.8')
		document.getElementById('model__Omni006').setAttribute('intensity', '0.8');
	else
		document.getElementById('model__Omni006').setAttribute('intensity', '0');
}

// Turn off light 6
function toggleOmni7() {
	if (document.getElementById('model__Omni007').getAttribute('intensity') != '0.8')
		document.getElementById('model__Omni007').setAttribute('intensity', '0.8');
	else
		document.getElementById('model__Omni007').setAttribute('intensity', '0');
}

function toggleLights() {
	if (document.getElementById('lightSwitch').innerHTML == 'On') {
		document.getElementById('lightSwitch').innerHTML = 'Dim';
		document.getElementById('model__Omni002').setAttribute('intensity', '0.4');
		document.getElementById('model__Omni003').setAttribute('intensity', '0.4');
		document.getElementById('model__Omni004').setAttribute('intensity', '0.4');
		document.getElementById('model__Omni005').setAttribute('intensity', '0.4');
		document.getElementById('model__Omni006').setAttribute('intensity', '0.4');
		document.getElementById('model__Omni007').setAttribute('intensity', '0.4');
	}
	else if (document.getElementById('lightSwitch').innerHTML == 'Dim') {
		document.getElementById('lightSwitch').innerHTML = 'Off';
		document.getElementById('model__Omni002').setAttribute('intensity', '0');
		document.getElementById('model__Omni003').setAttribute('intensity', '0');
		document.getElementById('model__Omni004').setAttribute('intensity', '0');
		document.getElementById('model__Omni005').setAttribute('intensity', '0');
		document.getElementById('model__Omni006').setAttribute('intensity', '0');
		document.getElementById('model__Omni007').setAttribute('intensity', '0');
	}
	else {
		document.getElementById('lightSwitch').innerHTML = 'On';
		document.getElementById('model__Omni002').setAttribute('intensity', '0.8');
		document.getElementById('model__Omni003').setAttribute('intensity', '0.8');
		document.getElementById('model__Omni004').setAttribute('intensity', '0.8');
		document.getElementById('model__Omni005').setAttribute('intensity', '0.8');
		document.getElementById('model__Omni006').setAttribute('intensity', '0.8');
		document.getElementById('model__Omni007').setAttribute('intensity', '0.8');
    }
}

// Camera angled at front of the model
function cameraFront()
{
	document.getElementById('model__FrontCamera').setAttribute('bind', 'true');
}

// Camera angled at back of the model
function cameraBack()
{
	document.getElementById('model__BackCamera').setAttribute('bind', 'true');
}

// Camera angled at left of the model
function cameraLeft()
{
	document.getElementById('model__LeftCamera').setAttribute('bind', 'true');
}

// Camera angled at right of the model
function cameraRight()
{
	document.getElementById('model__RightCamera').setAttribute('bind', 'true');
}

// Camera angled at top of the model
function cameraTop()
{
	document.getElementById('model__TopCamera').setAttribute('bind', 'true');
}

// Camera angled at bottom of the model
function cameraBottom()
{
	document.getElementById('model__BottomCamera').setAttribute('bind', 'true');
}

// Examine mode of navigation
function navExamine() {
	document.getElementById('model__NavInfo001').setAttribute('type', 'EXAMINE');
	document.getElementById('navSwitch').innerHTML = 'Examine';
}

// Walk mode of navigation
function navWalk() {
	document.getElementById('model__NavInfo001').setAttribute('type', 'WALK');
	document.getElementById('navSwitch').innerHTML = 'Walk';
}

// Fly mode of navigation
function navFly() {
	document.getElementById('model__NavInfo001').setAttribute('type', 'FLY');
	document.getElementById('navSwitch').innerHTML = 'Fly';
}

function navHeli() {
	document.getElementById('model__NavInfo001').setAttribute('type', 'HELICOPTER');
	document.getElementById('navSwitch').innerHTML = 'Helicopter';
}

function navLookAt() {
	document.getElementById('model__NavInfo001').setAttribute('type', 'LOOKAT');
	document.getElementById('navSwitch').innerHTML = 'Look At';
}

function navGame() {
	document.getElementById('model__NavInfo001').setAttribute('type', 'GAME');
	document.getElementById('navSwitch').innerHTML = 'Game';
}
// None mode of navigation
function navNone() {
	document.getElementById('model__NavInfo001').setAttribute('type', 'NONE');
	document.getElementById('navSwitch').innerHTML = 'None';
}

function toggleNav() {
	if (document.getElementById('navSwitch').innerHTML == 'Examine') {
		navWalk();
	}
	else if (document.getElementById('navSwitch').innerHTML == 'Walk') {
		navFly();
	}
	else if (document.getElementById('navSwitch').innerHTML == 'Fly') {
		navHeli();
	}
	else if (document.getElementById('navSwitch').innerHTML == 'Helicopter') {
		navLookAt();
	}
	else if (document.getElementById('navSwitch').innerHTML == 'Look At') {
		navGame();
	}
	else if (document.getElementById('navSwitch').innerHTML == 'Game') {
		navNone();
	}
	else {
		navExamine();
    }
}

// Change to fanta can model
function fantaScene() {
	nSwitch = 0;
	document.getElementById('SceneSwitch').setAttribute('whichChoice', nSwitch);
}
// Change to coke zero bottle model
function zeroScene() {
	nSwitch = 1;
	document.getElementById('SceneSwitch').setAttribute('whichChoice', nSwitch);
}
// Change to coke glass model
function cokeScene() {
	nSwitch = 2;
	document.getElementById('SceneSwitch').setAttribute('whichChoice', nSwitch);
}