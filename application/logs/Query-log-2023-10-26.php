SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'd7egajq40cmhv3bme6c4u48kou2q314c'
AND `ip_address` = '::1' 
 Execution Time:0.001068115234375

SELECT GET_LOCK('9d3a4113c5dd0215b0caff682de70ade', 300) AS ci_session_lock 
 Execution Time:0.00034594535827637

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'd7egajq40cmhv3bme6c4u48kou2q314c'
AND `ip_address` = '::1' 
 Execution Time:0.00048303604125977

SHOW TABLES FROM `ospos` 
 Execution Time:0.0038778781890869

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00036501884460449

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00052881240844727

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'company_logo'
 LIMIT 1 
 Execution Time:0.00049996376037598

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00052189826965332

