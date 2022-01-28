## Erro de proxies do Doctrine

PHP Warning:  require(C:\Users\lucas\AppData\Local\Temp\__CG__AluraCursosEntityCurso.php): failed to open stream: No such file or directory in C:\www\alura\php\09-MVC-com-PHP\vendor\doctrine\common\lib\Doctrine\Common\Proxy\AbstractProxyFactory.php on line 206

#### Solução

vendor/bin/doctrine orm:generate-proxies
