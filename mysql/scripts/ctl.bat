@echo off
rem START or STOP Services
rem ----------------------------------
rem Check if argument is STOP or START

if not ""%1"" == ""START"" goto stop


"C:\ABCB002\mysql\bin\mysqld" --defaults-file="C:\ABCB002\mysql\bin\my.ini" --standalone --console
if errorlevel 1 goto error
goto finish

:stop
"C:\ABCB002\apache\bin\pv" -f -k mysqld.exe -q

if not exist "C:\ABCB002\mysql\data\%computername%.pid" goto finish
echo Delete %computername%.pid ...
del "C:\ABCB002\mysql\data\%computername%.pid"
goto finish


:error
echo MySQL could not be started

:finish
exit
