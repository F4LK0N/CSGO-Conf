//##################################################################################################################################
//### LAUNCH OPTIONS ###
//##################################################################################################################################
// -noforcemaccel ; Use desktop mouse acceleration settings
// -noforcemspd ; Use desktop mouse speed settings.
// -noforcemparms ; Use desktop mouse buttons settings.
// -noaafonts ; Disables Anti-Aliasing of Screen Fonts.
// -heapsize 262144 ; 512MB System Memory
// -heapsize 524288 ; 1GB System Memory
// -heapsize 1048576 ; 2GB System Memory
// -w 640 -h 480 ; 640x480
// -w 800 -h 600 ; 800x600
// -w 1024 -h 768 ; 1024x768
// -full ; Forces the engine to start in fullscreen mode.
// -window ; Forces the engine to start in windowed mode.
// -freq 100 ; Changes the Hertz for monitors HL1 Engine. CRT 60-100 85=Common LCD 60-75 72=Common
// -refresh 100 ; Changes the Hertz for monitors HL2 Engine. CRT 60-100 85=Common LCD 60-75 72=Common
// -soft ; This enables Software hardware rendering mode.
// -d3d ; This enables Direct3D hardware rendering mode.
// -gl ; This enables Open GL hardware rendering mode.
// -nojoy ; Remove joystick support, more ram free.
// -noipx ; Disables LAN protocall.
// -noip ; Some IP related command remove if unable to connect to servers.
// -32bpp ; Enables 32Bit rendering.
// -16bpp ; Enables 16Bit rendering.
// -dxlevel 90 ; DirectX 9
// -dxlevel 81 ; DirectX 8.1
// -dxlevel 80 ; DirectX 8
// -dxlevel 70 ; DirectX 7
// -dxlevel 60 ; DirectX 6
// -port 27015 ; Changes your port # for the game.
// -console ; When launching Half-Life, this will take you straight to the console.
// -dev ; This is for developer mode.
// -zone # ; This allocates more memory to scripting files, like autoexec.cfg and so forth.
// -game [mod's name] ; Enable Half-Life to play modification games other than to go through the menu to select them.
// -safe ; It start the game in safe mode disable audio etc.
// -autoconfig ; Restores video and performance settings to default for the current hardware detected.
// -condebug ; Logs all console output into the console.log text file.
// -nocrashdialog ; Suppresses some 'memory could not be read' unhandled errors.
// -novid ; When loading a game with this parameter, the intro Valve video will not play.
// -toconsole ; Starts the engine directly in the console, unless a map is specified with +map.
// +a +r_mmx 1 ; Instead of using a cfg you can launch the game with a command or a cvar in the command line.
// +ex_interp 0.01 ; Sets ex_interp value
// +cl_forcepreload 1 - computer loads virtual model and textures before the match, decreasing the load during the game.
// +mat_disable_fancy_blending 1 - This command is for fancy blending, and degrades the quality of textures, as a result, the performance is increasing.
// +r_dynamic 0 / 1 - Switches on/off dynamic lighting.
// +mat_queue_mode 2 — Very handy command, which is switching on multicore processing, as the result, fps is raising
// -limitvsconst increases performance due to limitation of the max amount of shaders up to 256
//
//Launch Options Updated:
//https://dmarket.com/blog/csgo-launch-options/
// -full/-fullscreen - the game will launch in fullscreen mode
// -window/-windowed - CS:GO launches in a standard window
// -noborder - the game window has no borders
// +r_dynamic [0/1] - this command helps you disable (0) and enable (1) dynamic lighting
// -x - the position of the CS:GO window on the screen (horizontally)
// -y - the position of the CS:GO window on the screen (vertically)
// -w/width - with this commands you can set the window width (resolution)
// h/height - with this commands you can set the window height (resolution)
// -tickrate - a tick rate for your offline server and matches with bots. The default value here is 64. Increase it to get the game information refreshed more often. Bigger tick rates might overload your computer
// +fps max 0 - play with no limitations on the maximal CS:GO FPS. Use your value to set this limitation, for example, +fps max 60 (or even less to have CS:GO FPS boost on outdated computers);
// +cl_showfps 1 - to show FPS CS:GO
// -high - CS:GO gets the highest priority from the computer
// -novid - the game launches without the short starting video
// -nojoy - to disable joysticks. This slightly decreases the load on the computer
// -console - the CS:GO developer console will be open after the game launch
// -language [English] - to activate the English interface of CS:GO. You can use another language as well
// -refresh - this command selects how many times the pixels on the monitor will be refreshed per second
// -threads - enter here the number of CPU’s cores. Use the command if your CPU has three or more cores (it’s how to make CS:GO faster via a single action). It might have no influence because the game often makes the same on its own
// +r_drawparticles 0 - remove particles animation, so the picture will become simpler, but the performance might improve
// +cl_forcepreload 1 - computer loads virtual model and textures before the match, decreasing the load during the game
// -nod3d9ex1 - to disable the technology Direct3D 9Ex. Try to experiment with this command to see its real effect on the performance of your computer
// -lv - the command removes blood and thus reduces the load on your computer
// -autoconfig - use this command to clear up all the custom settings and return to default
//
//###############################################
// -processheap; DEPRECATED (Has a temporary bug fix in memory leak)
//###############################################
//# DUPREEH - PETER RASMUSSEN #
// -console -freq 240 -tickrate 128 +rate 786432 +cl_interp_ratio 1 +fps_max 0 +cl_updaterate 128 +cl_cmdrate 128 +cl_interp 0
//###############################################
//# ELIGE - JONATHAN JABLONOWSKI #
//+exec autoexec.cfg -novid -freq 240 -tickrate 128 +mat_queue_mode 2 -nojoy +rate 128000 -high
//###############################################
//# FALK0N - HISTORY - CSGO #
//-novid -high -nojoy -noforcemaccel -noforcemparms -noforcemspd -d3d9ex -processheap -threads 4 -exec autoexec.cfg
//-novid -high -nojoy -noforcemaccel -noforcemparms -noforcemspd -nod3d9ex -processheap -threads 4 -exec autoexec.cfg
//-novid -high -nojoy -nod3d9ex -processheap -threads 4 -exec autoexec.cfg
//-threads 4 -high -nod3d9ex +mat_queue_mode 2 +fps_max 999 +cl_forcepreload 1 -noaafonts -novid -nojoy -noforcemaccel -exec autoexec.cfg
//-threads 4 -high -nod3d9ex -novid -nojoy -noforcemaccel -console -exec autoexec.cfg
//-threads 4 -high -nod3d9ex -noaafonts -noforcemaccel -noforcemspd -noforcemparms -skipStartScreen -novid -nojoy -exec autoexec.cfg
//-threads 4 -high -nod3d9ex -noaafonts -noforcemaccel -noforcemspd -noforcemparms -skipStartScreen -novid -nojoy -exec autoexec.cfg
//-threads 12 -high -novid -nojoy -nod3d9ex -noaafonts -noforcemaccel -noforcemspd -noforcemparm -exec autoexec.cfg
//-high -threads 12 -novid -nojoy -nod3d9ex -noaafonts -noforcemaccel -noforcemspd -noforcemparm -exec autoexec.cfg
//# FALK0N - HISTORY - CS2 #
//-high -exec autoexec.cfg
//###############################################
//# FALK0N - CURRENT #
//-novid -tickrate 128 -high +fps_max 0 -nojoy -softparticlesdefaultoff -exec autoexec.cfg

//###############################################
//EXECUTABLE LOCATION:
//C:\Program Files (x86)\Steam\steamapps\common\Counter-Strike Global Offensive\game\bin\win64
//###############################################


//##################################################################################################################################
//### NAMES ###
//##################################################################################################################################
//###############################################
// MOUSE KEYS
//###############################################
// MOUSE1
// MOUSE2
// MOUSE3
// MOUSE4
// MOUSE5
// MWHEELUP
// MWHEELDOWN
//
//###############################################
// KEYBOARD KEYS
//###############################################
// LETTER KEYS:
//   a, b, c, d, e, f, g, h, i, j, k, l, m, n, o, p, q, r, s, t, u, v, w, x, y, z
//
// NUMBER KEYS:
//   1, 2, 3, 4, 5, 6, 7, 8, 9, 0
//
// FUNCTION KEYS:
//   F1, F2, F3, F4, F5, F6, F7, F8, F9, F10, F11, F12
//
// ARROW KEYS:
//   UPARROW, RIGHTARROW, DOWNARROW, LEFTARROW
//
// NUMERIC KEYBOARD KEYS:
//          KP_DIVIDE   KP_MULTIPLY   KP_MINUS
//   KP_7   KP_8        KP_9          KP_PLUS
//   KP_4   KP_5        KP_6
//   KP_1   KP_2        KP_3
//   KP_0               KP_DEL        KP_ENTER
//
// SPECIAL KEYS:
//   ENTER, SPACE, SHIFT, CTRL, PAUSE, ALT, BACKSPACE, TAB, CAPSLOCK, TILDE
//
// SCROLL AND NAVIGATION KEYS:
//   INS, DEL, HOME, END, PGUP, PGDN
//
// MISC. KEYS:
//   , . / \ ' * [ ] - = [ ]
//
//  SEMICOLON (;), C_WITH_CEDILLA (ç), ACUTE_ACCENT (´)
//
//###############################################
// ITEMS
//###############################################
// PISTOLS:
//   weapon_glock - Glock 20 (T Only)
//   weapon_hkp2000 - P2000
//   weapon_p250 - P250
//   weapon_elite - Dual Elites
//   weapon_deagle - Desert Eagle/Deagle
//   weapon_tec9 - Five Seven (CT Only)
//   weapon_tec9 - Tec 9 (T Only)
//
// SUB-MACHINE GUNS/PDW'S:
//   weapon_mp9 - MP9 (CT Only)
//   weapon_mac10 - Mac 10 (T Only)
//   weapon_mp7 - MP7
//   weapon_p90 - P90
//   weapon_bizon - PP-19 Bizon
//   weapon_ump45 - UMP .45
//
// SHOTGUNS:
//   weapon_nova - Nova
//   weapon_xm1014 - XM 1014
//   weapon_mag7 - MAG 7 (CT Only)
//   weapon_sawedoff - Sawed Off (T Only)
//
// MACHINE GUNS:
//   weapon_negev - Negev
//   weapon_m249 - M249
//
// RIFLES:
//   weapon_sg008 - SG 008 Sniper/Scout
//   weapon_awp - AWP Sniper
//   weapon_ak47 - AK 47 (T Only)
//   weapon_galilar - Galil (T Only)
//   weapon_sg556 - SG 556 (T Only)
//   weapon_g3sg1 - G3 SG1 (T Only)
//   weapon_famas - Famas (CT Only)
//   weapon_m4a1 - M4A4 (CT Only)
//   weapon_m4a1-s - M4A1 Silenced (CT Only)
//   weapon_aug - AUG (CT Only)
//   weapon_scar20 - Scar 20 (CT Only)
//
// GRENADES:
//   weapon_hegrenade - Grenade
//   weapon_flashbang - Flashbang
//   weapon_smokegrenade - Smoke Grenade
//   weapon_decoy - Decoy Grenade
//   weapon_molotov - Molotov (T Only)
//   weapon_incgrenade - Incindiary Grenade (CT Only)
//
// GEARS:
//   defuser - Defuse Kit
//   vest - Kevlar
//   vesthelm - Kevlar+Helment
//
//##################################################################################################################################
//### COMMANDS ###
//##################################################################################################################################
//###############################################
// ECHO
//###############################################
// clear //Clear console text;
// echo "Text to display in console." //Display text in console;
//
//###############################################
// ALIAS
//###############################################
//
// alias "name" "command" //Create an alias to a command or a sequence of commands, including other aliases;
//
//   Ex. Simple:
//    - alias "alias_name" "command"
//    - alias "alias_name" "command args"
//
//   Ex. Alias of Aliases:
//    - alias "echo_hi" "echo Hi User!"
//    - alias "echo_bye" "echo Bye!"
//    - alias "echo_hi_bye" "echo_hi; echo_bye"
//    - echo_hi_bye
//
//   Ex. Bind Alias:
//    - alias "bind_alias_name" "bind key alias_name"
//    - bind "key" "bind_alias_name"
//
//   Ex. Alias Creator:
//    - alias "echo_a" "echo a"
//    - alias "echo_b" "echo b"
//    - alias "test_enable_a" "alias alias_test echo_a"
//    - alias "test_enable_b" "alias alias_test echo_b"
//    - alias alias_test "echo ---"
//    - bind f6 alias_test
//    - bind f7 test_enable_a
//    - bind f8 test_enable_b
//
//###############################################
// BIND
//###############################################
//
// bind key command
// bind key incrementvar csvar min max incrementvalue
//
//###############################################
// CHAT
//###############################################
// say
// say_team
// player_ping
// needbackup
//
//###############################################
// SOUNDS
//###############################################
//
// play "filepath"
//   Ex. Play Bind:
//    - bind b "play doors\door_metal_thin_close2"
//    - bind n "play player\vo\idf\coverme01"
//    - bind j "play player\vo\idf\negative01"

//##################################################################################################################################
//### ALIAS ###
//##################################################################################################################################
//###############################################
// SAY
//###############################################
//say "Text";
//say_team "Text";
//alias "say_text" "say TEXT TEXT TEXT";
//alias "say_reload" "say_team RELOADING RELOADING RELOADING RELOADING";