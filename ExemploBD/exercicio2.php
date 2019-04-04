EXPLICAR A DIFERENÇA DOS COMANDOS :
-REQUIRE
-INCLUDE
-REQUIRE_ONCE
-INCLUDE_ONCE
	
	
	A diferença entre include e require é a forma como um erro é tratado. require produz um erro E_COMPILE_ERROR, 
	o que encerra a execução do script. O include apenas produz um warning que pode ser "abafado" com @.

	Include_once tem a garantia que o arquivo não será incluído novamente se ele já foi incluído antes.

	Require_once é análogo (funcão semelhante, porém origem distintas) ao include_once.

	Require_once é um statement (declaração) portanto a sintaxe com parenteses pode confundir um pouco.
	No primeiro olhar pode parecer que é uma função. Por isso não aconselho seu uso,
	apesar de não trazer consequências prejudiciais ao programa.