<?php
// Hanya menanbahkan key tambahan di termux
// Untuk membantu pengguna Termux

function Start($author="@maestroal.dev"){
	system("clear");
	print "
\033[0;92m T E R M U X K E Y S
\033[0m---------------------     \033[0mMenambah key tambahan untuk membantu.
\033[0m  By \033[0;96m$author              \033[0mCocok untuk coding di Termux.\n\n\n\n";
	echo "[+] Loading";
	for($i=0;$i<=5;$i++){
		print ".";
		sleep(1);
	}
	$files="/data/data/com.termux/files/home/.termux/termux.properties";
	$o_files=fopen($files, 'w');
	fwrite($o_files, "extra-keys = [['ESC','/','-','HOME','UP','END','PGUP'],['TAB','CTRL','ALT','LEFT','DOWN','RIGHT','PGDN']]");
	fclose($o_files);
	system('termux-reload-settings');
	echo "Success!\n\n";
}
function Create_Dir(){
	system("mkdir /data/data/com.termux/files/home/.termux");
}
function calling(){
	Create_Dir();
	Start();
}
calling();
?>
