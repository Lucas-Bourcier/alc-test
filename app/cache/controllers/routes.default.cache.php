<?php
return array("/Main/(index/)?"=>["controller"=>"controllers\\MainController","action"=>"index","parameters"=>[],"name"=>"main.index","cache"=>false,"duration"=>0],"/Main/autre/"=>["controller"=>"controllers\\MainController","action"=>"autreAction","parameters"=>[],"name"=>"main.autreAction","cache"=>false,"duration"=>0],"/Main/AclValid/(.+?)/"=>["controller"=>"controllers\\MainController","action"=>"AclValid","parameters"=>[0],"name"=>"main.AclValid","cache"=>false,"duration"=>0],"/login/(index/)?"=>["controller"=>"controllers\\MyAuth","action"=>"index","parameters"=>[],"name"=>"myAuth.index","cache"=>false,"duration"=>0],"/login/noAccess/(.+?)/"=>["controller"=>"controllers\\MyAuth","action"=>"noAccess","parameters"=>[0],"name"=>"myAuth.noAccess","cache"=>false,"duration"=>0],"/login/connect/"=>["controller"=>"controllers\\MyAuth","action"=>"connect","parameters"=>[],"name"=>"myAuth.connect","cache"=>false,"duration"=>0],"/login/badLogin/"=>["controller"=>"controllers\\MyAuth","action"=>"badLogin","parameters"=>[],"name"=>"myAuth.badLogin","cache"=>false,"duration"=>0],"/login/terminate/"=>["controller"=>"controllers\\MyAuth","action"=>"terminate","parameters"=>[],"name"=>"myAuth.terminate","cache"=>false,"duration"=>0],"/login/info/(.*?)"=>["controller"=>"controllers\\MyAuth","action"=>"info","parameters"=>["~0"],"name"=>"myAuth.info","cache"=>false,"duration"=>0],"/login/checkConnection/"=>["controller"=>"controllers\\MyAuth","action"=>"checkConnection","parameters"=>[],"name"=>"myAuth.checkConnection","cache"=>false,"duration"=>0],"/login/forgetConnection/"=>["controller"=>"controllers\\MyAuth","action"=>"forgetConnection","parameters"=>[],"name"=>"myAuth.forgetConnection","cache"=>false,"duration"=>0],"/login/message/(.+?)/(.+?)/(.+?)/(.*?)"=>["controller"=>"controllers\\MyAuth","action"=>"message","parameters"=>[0,1,2,"~3","~4"],"name"=>"myAuth.message","cache"=>false,"duration"=>0]);
