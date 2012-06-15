<?php

return function($app) {
	$app->get('/', function() {
		return 'Hello, world!';
	});
};
