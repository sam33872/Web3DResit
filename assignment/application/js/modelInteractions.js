

// change through wireframe
function wireframe()
{
	var e = document.getElementById('wire');
	e.runtime.togglePoints(true);
	e.runtime.togglePoints(true);
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
function navExamine()
{
	document.getElementById('model__NavInfo001').setAttribute('type', 'EXAMINE');
}
// Walk mode of navigation
function navWalk() {
	document.getElementById('model__NavInfo001').setAttribute('type', 'WALK');
}
// Fly mode of navigation
function navFly() {
	document.getElementById('model__NavInfo001').setAttribute('type', 'FLY');
}
// None mode of navigation
function navNone() {
	document.getElementById('model__NavInfo001').setAttribute('type', 'NONE');
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