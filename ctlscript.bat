@echo off
rem START or STOP Services
rem ----------------------------------
rem Check if argument is STOP or START

if not ""%1"" == ""START"" goto stop

if exist C:\ABCB002\hypersonic\scripts\ctl.bat (start /MIN /B C:\ABCB002\server\hsql-sample-database\scripts\ctl.bat START)
if exist C:\ABCB002\ingres\scripts\ctl.bat (start /MIN /B C:\ABCB002\ingres\scripts\ctl.bat START)
if exist C:\ABCB002\mysql\scripts\ctl.bat (start /MIN /B C:\ABCB002\mysql\scripts\ctl.bat START)
if exist C:\ABCB002\postgresql\scripts\ctl.bat (start /MIN /B C:\ABCB002\postgresql\scripts\ctl.bat START)
if exist C:\ABCB002\apache\scripts\ctl.bat (start /MIN /B C:\ABCB002\apache\scripts\ctl.bat START)
if exist C:\ABCB002\openoffice\scripts\ctl.bat (start /MIN /B C:\ABCB002\openoffice\scripts\ctl.bat START)
if exist C:\ABCB002\apache-tomcat\scripts\ctl.bat (start /MIN /B C:\ABCB002\apache-tomcat\scripts\ctl.bat START)
if exist C:\ABCB002\resin\scripts\ctl.bat (start /MIN /B C:\ABCB002\resin\scripts\ctl.bat START)
if exist C:\ABCB002\jboss\scripts\ctl.bat (start /MIN /B C:\ABCB002\jboss\scripts\ctl.bat START)
if exist C:\ABCB002\jetty\scripts\ctl.bat (start /MIN /B C:\ABCB002\jetty\scripts\ctl.bat START)
if exist C:\ABCB002\subversion\scripts\ctl.bat (start /MIN /B C:\ABCB002\subversion\scripts\ctl.bat START)
rem RUBY_APPLICATION_START
if exist C:\ABCB002\lucene\scripts\ctl.bat (start /MIN /B C:\ABCB002\lucene\scripts\ctl.bat START)
if exist C:\ABCB002\third_application\scripts\ctl.bat (start /MIN /B C:\ABCB002\third_application\scripts\ctl.bat START)
goto end

:stop
echo "Stopping services ..."
if exist C:\ABCB002\third_application\scripts\ctl.bat (start /MIN /B C:\ABCB002\third_application\scripts\ctl.bat STOP)
if exist C:\ABCB002\lucene\scripts\ctl.bat (start /MIN /B C:\ABCB002\lucene\scripts\ctl.bat STOP)
rem RUBY_APPLICATION_STOP
if exist C:\ABCB002\subversion\scripts\ctl.bat (start /MIN /B C:\ABCB002\subversion\scripts\ctl.bat STOP)
if exist C:\ABCB002\jetty\scripts\ctl.bat (start /MIN /B C:\ABCB002\jetty\scripts\ctl.bat STOP)
if exist C:\ABCB002\hypersonic\scripts\ctl.bat (start /MIN /B C:\ABCB002\server\hsql-sample-database\scripts\ctl.bat STOP)
if exist C:\ABCB002\jboss\scripts\ctl.bat (start /MIN /B C:\ABCB002\jboss\scripts\ctl.bat STOP)
if exist C:\ABCB002\resin\scripts\ctl.bat (start /MIN /B C:\ABCB002\resin\scripts\ctl.bat STOP)
if exist C:\ABCB002\apache-tomcat\scripts\ctl.bat (start /MIN /B /WAIT C:\ABCB002\apache-tomcat\scripts\ctl.bat STOP)
if exist C:\ABCB002\openoffice\scripts\ctl.bat (start /MIN /B C:\ABCB002\openoffice\scripts\ctl.bat STOP)
if exist C:\ABCB002\apache\scripts\ctl.bat (start /MIN /B C:\ABCB002\apache\scripts\ctl.bat STOP)
if exist C:\ABCB002\ingres\scripts\ctl.bat (start /MIN /B C:\ABCB002\ingres\scripts\ctl.bat STOP)
if exist C:\ABCB002\mysql\scripts\ctl.bat (start /MIN /B C:\ABCB002\mysql\scripts\ctl.bat STOP)
if exist C:\ABCB002\postgresql\scripts\ctl.bat (start /MIN /B C:\ABCB002\postgresql\scripts\ctl.bat STOP)

:end

