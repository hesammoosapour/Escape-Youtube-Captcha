@echo off
color 0A

cd E:\Projects\PHP\Decode Youtube
::start "C:\Windows\system32\cmd.exe" -f "decode-youtube.php"

start cmd /k "php decode-youtube.php"
exit 0