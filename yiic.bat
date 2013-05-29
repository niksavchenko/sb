@echo off

@setlocal

@set BIN_PATH=%~dp0
set BIN_PATH="PHP"

if "%PHP_COMMAND%" == "" set PHP_COMMAND=php.exe

%PHP_COMMAND% "console\yiic.php" %*

@endlocal
