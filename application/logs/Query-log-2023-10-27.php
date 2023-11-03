SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'hqdbqb7hira6k7929roiph70jc4kn794'
AND `ip_address` = '::1' 
 Execution Time:0.0034658908843994

SELECT GET_LOCK('3f50f79c27ab991caf4b9b7677b5ab2d', 300) AS ci_session_lock 
 Execution Time:0.0006248950958252

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'hqdbqb7hira6k7929roiph70jc4kn794'
AND `ip_address` = '::1' 
 Execution Time:0.00076699256896973

UPDATE `ospos_sessions` SET `timestamp` = 1698412690, `data` = '__ci_last_regenerate|i:1698412690;person_id|s:1:\"1\";menu_group|s:6:\"office\";'
WHERE `id` = 'hqdbqb7hira6k7929roiph70jc4kn794'
AND `ip_address` = '::1' 
 Execution Time:0.0064690113067627

SELECT RELEASE_LOCK('3f50f79c27ab991caf4b9b7677b5ab2d') AS ci_session_lock 
 Execution Time:0.0028529167175293

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'hqdbqb7hira6k7929roiph70jc4kn794'
AND `ip_address` = '::1' 
 Execution Time:0.0021722316741943

SELECT GET_LOCK('da64ecf84931f08d4f0e98c543b71a88', 300) AS ci_session_lock 
 Execution Time:0.0010521411895752

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '1et5mj4mlohatocphsd589ok9lip1aqo'
AND `ip_address` = '::1' 
 Execution Time:0.00096416473388672

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0014019012451172

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0026230812072754

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00071001052856445

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0014739036560059

SHOW TABLES FROM `ospos` 
 Execution Time:0.0079209804534912

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00051999092102051

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.012194871902466

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0019230842590332

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00046014785766602

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00034499168395996

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00032997131347656

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00070691108703613

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00065112113952637

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00051999092102051

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '1et5mj4mlohatocphsd589ok9lip1aqo'
AND `ip_address` = '::1' 
 Execution Time:0.0011138916015625

SELECT GET_LOCK('da64ecf84931f08d4f0e98c543b71a88', 300) AS ci_session_lock 
 Execution Time:0.00062394142150879

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '1et5mj4mlohatocphsd589ok9lip1aqo'
AND `ip_address` = '::1' 
 Execution Time:0.00083684921264648

UPDATE `ospos_sessions` SET `timestamp` = 1698413049, `data` = '__ci_last_regenerate|i:1698413049;person_id|s:1:\"1\";menu_group|s:6:\"office\";'
WHERE `id` = '1et5mj4mlohatocphsd589ok9lip1aqo'
AND `ip_address` = '::1' 
 Execution Time:0.0029258728027344

SELECT RELEASE_LOCK('da64ecf84931f08d4f0e98c543b71a88') AS ci_session_lock 
 Execution Time:0.00059390068054199

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '1et5mj4mlohatocphsd589ok9lip1aqo'
AND `ip_address` = '::1' 
 Execution Time:0.00085616111755371

SELECT GET_LOCK('9fbba8d06cad5d8ec6ef09b56a85788d', 300) AS ci_session_lock 
 Execution Time:0.00041413307189941

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'bt0bhq77ga3v8oom163jrql95semc5ql'
AND `ip_address` = '::1' 
 Execution Time:0.002277135848999

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0011959075927734

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0013489723205566

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.001539945602417

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0016539096832275

SHOW TABLES FROM `ospos` 
 Execution Time:0.0052530765533447

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00068402290344238

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.001025915145874

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099706649780273

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00084805488586426

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00074219703674316

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00071883201599121

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010418891906738

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010039806365967

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00077486038208008

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'bt0bhq77ga3v8oom163jrql95semc5ql'
AND `ip_address` = '::1' 
 Execution Time:0.0022430419921875

SELECT GET_LOCK('9fbba8d06cad5d8ec6ef09b56a85788d', 300) AS ci_session_lock 
 Execution Time:0.00072407722473145

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'bt0bhq77ga3v8oom163jrql95semc5ql'
AND `ip_address` = '::1' 
 Execution Time:0.0011248588562012

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010099411010742

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00066995620727539

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00043392181396484

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0011889934539795

SHOW TABLES FROM `ospos` 
 Execution Time:0.0039269924163818

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00053000450134277

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.001276969909668

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0015311241149902

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00080609321594238

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0005180835723877

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00047492980957031

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00059080123901367

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0016870498657227

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0011088848114014

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'bt0bhq77ga3v8oom163jrql95semc5ql'
AND `ip_address` = '::1' 
 Execution Time:0.00060200691223145

SELECT GET_LOCK('9fbba8d06cad5d8ec6ef09b56a85788d', 300) AS ci_session_lock 
 Execution Time:0.00036001205444336

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'bt0bhq77ga3v8oom163jrql95semc5ql'
AND `ip_address` = '::1' 
 Execution Time:0.00077199935913086

UPDATE `ospos_sessions` SET `timestamp` = 1698413479, `data` = '__ci_last_regenerate|i:1698413479;person_id|s:1:\"1\";menu_group|s:6:\"office\";'
WHERE `id` = 'bt0bhq77ga3v8oom163jrql95semc5ql'
AND `ip_address` = '::1' 
 Execution Time:0.0051138401031494

SELECT RELEASE_LOCK('9fbba8d06cad5d8ec6ef09b56a85788d') AS ci_session_lock 
 Execution Time:0.00038003921508789

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'bt0bhq77ga3v8oom163jrql95semc5ql'
AND `ip_address` = '::1' 
 Execution Time:0.00063896179199219

SELECT GET_LOCK('1dec6de037c160ad16a536ac6a71e117', 300) AS ci_session_lock 
 Execution Time:0.00034308433532715

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '955fej0v1418743vctt5beaia8aecoqe'
AND `ip_address` = '::1' 
 Execution Time:0.00056719779968262

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0006101131439209

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0005028247833252

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00041103363037109

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0013790130615234

SHOW TABLES FROM `ospos` 
 Execution Time:0.0031290054321289

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00040984153747559

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00064206123352051

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00088787078857422

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0007779598236084

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0019299983978271

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00081586837768555

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00065088272094727

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00057196617126465

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0005028247833252

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '955fej0v1418743vctt5beaia8aecoqe'
AND `ip_address` = '::1' 
 Execution Time:0.0034928321838379

SELECT GET_LOCK('1dec6de037c160ad16a536ac6a71e117', 300) AS ci_session_lock 
 Execution Time:0.00049304962158203

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '955fej0v1418743vctt5beaia8aecoqe'
AND `ip_address` = '::1' 
 Execution Time:0.0006859302520752

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00076889991760254

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00069189071655273

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00040078163146973

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0010628700256348

SHOW TABLES FROM `ospos` 
 Execution Time:0.0031588077545166

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0031590461730957

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0011000633239746

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00065994262695312

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0016000270843506

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00076103210449219

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00089907646179199

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0011630058288574

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.006505012512207

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00061392784118652

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '955fej0v1418743vctt5beaia8aecoqe'
AND `ip_address` = '::1' 
 Execution Time:0.00062894821166992

SELECT GET_LOCK('1dec6de037c160ad16a536ac6a71e117', 300) AS ci_session_lock 
 Execution Time:0.0003969669342041

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '955fej0v1418743vctt5beaia8aecoqe'
AND `ip_address` = '::1' 
 Execution Time:0.00050497055053711

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0011460781097412

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00096321105957031

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00054502487182617

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0065279006958008

SHOW TABLES FROM `ospos` 
 Execution Time:0.0083980560302734

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00060796737670898

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00061702728271484

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00092411041259766

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00090122222900391

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0012190341949463

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00059390068054199

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00053596496582031

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00084495544433594

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00067400932312012

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '955fej0v1418743vctt5beaia8aecoqe'
AND `ip_address` = '::1' 
 Execution Time:0.00070500373840332

SELECT GET_LOCK('1dec6de037c160ad16a536ac6a71e117', 300) AS ci_session_lock 
 Execution Time:0.00032210350036621

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '955fej0v1418743vctt5beaia8aecoqe'
AND `ip_address` = '::1' 
 Execution Time:0.00045084953308105

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00070405006408691

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00054597854614258

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00066208839416504

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0013320446014404

SHOW TABLES FROM `ospos` 
 Execution Time:0.004141092300415

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00047111511230469

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00061607360839844

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099492073059082

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00067615509033203

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00043106079101562

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00048708915710449

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00062179565429688

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00060105323791504

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00049400329589844

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '955fej0v1418743vctt5beaia8aecoqe'
AND `ip_address` = '::1' 
 Execution Time:0.0006101131439209

SELECT GET_LOCK('1dec6de037c160ad16a536ac6a71e117', 300) AS ci_session_lock 
 Execution Time:0.00042200088500977

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '955fej0v1418743vctt5beaia8aecoqe'
AND `ip_address` = '::1' 
 Execution Time:0.00050711631774902

UPDATE `ospos_sessions` SET `timestamp` = 1698413817, `data` = '__ci_last_regenerate|i:1698413817;person_id|s:1:\"1\";menu_group|s:6:\"office\";'
WHERE `id` = '955fej0v1418743vctt5beaia8aecoqe'
AND `ip_address` = '::1' 
 Execution Time:0.0038788318634033

SELECT RELEASE_LOCK('1dec6de037c160ad16a536ac6a71e117') AS ci_session_lock 
 Execution Time:0.0002598762512207

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '955fej0v1418743vctt5beaia8aecoqe'
AND `ip_address` = '::1' 
 Execution Time:0.0068769454956055

SELECT GET_LOCK('c4cd81d8a98555d79f1ab03861d5a85b', 300) AS ci_session_lock 
 Execution Time:0.0003201961517334

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ls6svvavheaf244cnggkk6d31mqhm3he'
AND `ip_address` = '::1' 
 Execution Time:0.00048613548278809

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00068306922912598

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0004270076751709

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00029182434082031

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00087881088256836

SHOW TABLES FROM `ospos` 
 Execution Time:0.0069520473480225

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00068497657775879

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00071597099304199

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0006260871887207

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0088191032409668

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0029089450836182

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.000823974609375

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00063395500183105

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00059700012207031

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00051999092102051

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'ls6svvavheaf244cnggkk6d31mqhm3he'
AND `ip_address` = '::1' 
 Execution Time:0.0043580532073975

SELECT GET_LOCK('c4cd81d8a98555d79f1ab03861d5a85b', 300) AS ci_session_lock 
 Execution Time:0.00051498413085938

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ls6svvavheaf244cnggkk6d31mqhm3he'
AND `ip_address` = '::1' 
 Execution Time:0.00060486793518066

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0044691562652588

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0018589496612549

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00071310997009277

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0013089179992676

SHOW TABLES FROM `ospos` 
 Execution Time:0.0046930313110352

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00049805641174316

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00088620185852051

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0020408630371094

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0015761852264404

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0023660659790039

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0061209201812744

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0011229515075684

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00073409080505371

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0005958080291748

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'ls6svvavheaf244cnggkk6d31mqhm3he'
AND `ip_address` = '::1' 
 Execution Time:0.0077309608459473

SELECT GET_LOCK('c4cd81d8a98555d79f1ab03861d5a85b', 300) AS ci_session_lock 
 Execution Time:0.00049495697021484

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ls6svvavheaf244cnggkk6d31mqhm3he'
AND `ip_address` = '::1' 
 Execution Time:0.0008552074432373

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010571479797363

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00079178810119629

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00068783760070801

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0042839050292969

SHOW TABLES FROM `ospos` 
 Execution Time:0.0061428546905518

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00055098533630371

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0007479190826416

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00074505805969238

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00065398216247559

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00047588348388672

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00073790550231934

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00061511993408203

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00051283836364746

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0018260478973389

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'ls6svvavheaf244cnggkk6d31mqhm3he'
AND `ip_address` = '::1' 
 Execution Time:0.0017290115356445

SELECT GET_LOCK('c4cd81d8a98555d79f1ab03861d5a85b', 300) AS ci_session_lock 
 Execution Time:0.00030899047851562

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ls6svvavheaf244cnggkk6d31mqhm3he'
AND `ip_address` = '::1' 
 Execution Time:0.0004730224609375

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00068306922912598

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00099015235900879

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00049209594726562

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0011680126190186

SHOW TABLES FROM `ospos` 
 Execution Time:0.0042040348052979

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00046610832214355

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00046586990356445

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00057697296142578

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00050115585327148

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0005030632019043

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00052595138549805

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00057101249694824

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0008080005645752

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.002295970916748

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'ls6svvavheaf244cnggkk6d31mqhm3he'
AND `ip_address` = '::1' 
 Execution Time:0.00084090232849121

SELECT GET_LOCK('c4cd81d8a98555d79f1ab03861d5a85b', 300) AS ci_session_lock 
 Execution Time:0.00042009353637695

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ls6svvavheaf244cnggkk6d31mqhm3he'
AND `ip_address` = '::1' 
 Execution Time:0.0007319450378418

UPDATE `ospos_sessions` SET `timestamp` = 1698414140, `data` = '__ci_last_regenerate|i:1698414140;person_id|s:1:\"1\";menu_group|s:6:\"office\";'
WHERE `id` = 'ls6svvavheaf244cnggkk6d31mqhm3he'
AND `ip_address` = '::1' 
 Execution Time:0.0054459571838379

SELECT RELEASE_LOCK('c4cd81d8a98555d79f1ab03861d5a85b') AS ci_session_lock 
 Execution Time:0.00060296058654785

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'ls6svvavheaf244cnggkk6d31mqhm3he'
AND `ip_address` = '::1' 
 Execution Time:0.00064206123352051

SELECT GET_LOCK('7e412d87480b06cb50154857cf53fee4', 300) AS ci_session_lock 
 Execution Time:0.00060081481933594

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'lb2bbe2ckatghep8li6smmnj90qnt6ou'
AND `ip_address` = '::1' 
 Execution Time:0.00079894065856934

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00071001052856445

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00053787231445312

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00059199333190918

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.001255989074707

SHOW TABLES FROM `ospos` 
 Execution Time:0.0046250820159912

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00046300888061523

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00057196617126465

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00063014030456543

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00095295906066895

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00097799301147461

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0005800724029541

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0006258487701416

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00072908401489258

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010831356048584

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'lb2bbe2ckatghep8li6smmnj90qnt6ou'
AND `ip_address` = '::1' 
 Execution Time:0.00070786476135254

SELECT GET_LOCK('7e412d87480b06cb50154857cf53fee4', 300) AS ci_session_lock 
 Execution Time:0.0036001205444336

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'lb2bbe2ckatghep8li6smmnj90qnt6ou'
AND `ip_address` = '::1' 
 Execution Time:0.00079679489135742

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0007481575012207

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00090503692626953

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00065088272094727

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0013370513916016

SHOW TABLES FROM `ospos` 
 Execution Time:0.0052518844604492

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0015978813171387

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0010628700256348

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0006868839263916

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0005650520324707

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00075602531433105

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00077295303344727

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00071096420288086

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0011708736419678

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0011570453643799

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'lb2bbe2ckatghep8li6smmnj90qnt6ou'
AND `ip_address` = '::1' 
 Execution Time:0.00089383125305176

SELECT GET_LOCK('7e412d87480b06cb50154857cf53fee4', 300) AS ci_session_lock 
 Execution Time:0.0014801025390625

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'lb2bbe2ckatghep8li6smmnj90qnt6ou'
AND `ip_address` = '::1' 
 Execution Time:0.00052309036254883

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010027885437012

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00065517425537109

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00037884712219238

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00097513198852539

SHOW TABLES FROM `ospos` 
 Execution Time:0.0039539337158203

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0006558895111084

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00071501731872559

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00072813034057617

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00061202049255371

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00041604042053223

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00061488151550293

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00067400932312012

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0012691020965576

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0009300708770752

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'lb2bbe2ckatghep8li6smmnj90qnt6ou'
AND `ip_address` = '::1' 
 Execution Time:0.00074005126953125

SELECT GET_LOCK('7e412d87480b06cb50154857cf53fee4', 300) AS ci_session_lock 
 Execution Time:0.00042200088500977

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'lb2bbe2ckatghep8li6smmnj90qnt6ou'
AND `ip_address` = '::1' 
 Execution Time:0.00070691108703613

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00074291229248047

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00075793266296387

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00076484680175781

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0016810894012451

SHOW TABLES FROM `ospos` 
 Execution Time:0.0032320022583008

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00078201293945312

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0014300346374512

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010759830474854

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00077104568481445

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00072693824768066

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00064396858215332

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.001054048538208

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0009911060333252

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0005791187286377

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'lb2bbe2ckatghep8li6smmnj90qnt6ou'
AND `ip_address` = '::1' 
 Execution Time:0.00057387351989746

SELECT GET_LOCK('7e412d87480b06cb50154857cf53fee4', 300) AS ci_session_lock 
 Execution Time:0.00039291381835938

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'lb2bbe2ckatghep8li6smmnj90qnt6ou'
AND `ip_address` = '::1' 
 Execution Time:0.00045299530029297

UPDATE `ospos_sessions` SET `timestamp` = 1698414495, `data` = '__ci_last_regenerate|i:1698414495;person_id|s:1:\"1\";menu_group|s:6:\"office\";'
WHERE `id` = 'lb2bbe2ckatghep8li6smmnj90qnt6ou'
AND `ip_address` = '::1' 
 Execution Time:0.0036180019378662

SELECT RELEASE_LOCK('7e412d87480b06cb50154857cf53fee4') AS ci_session_lock 
 Execution Time:0.00032711029052734

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'lb2bbe2ckatghep8li6smmnj90qnt6ou'
AND `ip_address` = '::1' 
 Execution Time:0.00056982040405273

SELECT GET_LOCK('073916f731177d9f40ffab4f54e6bfd2', 300) AS ci_session_lock 
 Execution Time:0.00030899047851562

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '9n2ucp4frik6195pcr5jo2onsnrjv454'
AND `ip_address` = '::1' 
 Execution Time:0.00043296813964844

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0030457973480225

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00085878372192383

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.0012850761413574

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0011348724365234

SHOW TABLES FROM `ospos` 
 Execution Time:0.010979890823364

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.017308950424194

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0049710273742676

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0086319446563721

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00097203254699707

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00086092948913574

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00088810920715332

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00065994262695312

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0044729709625244

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0015840530395508

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '9n2ucp4frik6195pcr5jo2onsnrjv454'
AND `ip_address` = '::1' 
 Execution Time:0.00069904327392578

SELECT GET_LOCK('073916f731177d9f40ffab4f54e6bfd2', 300) AS ci_session_lock 
 Execution Time:0.00039219856262207

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '9n2ucp4frik6195pcr5jo2onsnrjv454'
AND `ip_address` = '::1' 
 Execution Time:0.0004570484161377

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00051712989807129

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00036191940307617

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00034904479980469

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00066399574279785

SHOW TABLES FROM `ospos` 
 Execution Time:0.0034778118133545

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00041890144348145

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00080990791320801

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00061297416687012

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00056910514831543

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00056099891662598

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00044798851013184

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00063109397888184

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0009610652923584

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010528564453125

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '9n2ucp4frik6195pcr5jo2onsnrjv454'
AND `ip_address` = '::1' 
 Execution Time:0.0011770725250244

SELECT GET_LOCK('073916f731177d9f40ffab4f54e6bfd2', 300) AS ci_session_lock 
 Execution Time:0.0027711391448975

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '9n2ucp4frik6195pcr5jo2onsnrjv454'
AND `ip_address` = '::1' 
 Execution Time:0.0017778873443604

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0019230842590332

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0019338130950928

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00046396255493164

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.001162052154541

SHOW TABLES FROM `ospos` 
 Execution Time:0.0048520565032959

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00056791305541992

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00087380409240723

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.007957935333252

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0047080516815186

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0054359436035156

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0057737827301025

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0018630027770996

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010089874267578

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0012640953063965

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '9n2ucp4frik6195pcr5jo2onsnrjv454'
AND `ip_address` = '::1' 
 Execution Time:0.00064396858215332

SELECT GET_LOCK('073916f731177d9f40ffab4f54e6bfd2', 300) AS ci_session_lock 
 Execution Time:0.0004429817199707

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '9n2ucp4frik6195pcr5jo2onsnrjv454'
AND `ip_address` = '::1' 
 Execution Time:0.00059008598327637

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0019588470458984

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00075912475585938

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00050497055053711

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0014059543609619

SHOW TABLES FROM `ospos` 
 Execution Time:0.0058159828186035

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0016660690307617

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0009610652923584

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0027379989624023

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0016200542449951

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0093529224395752

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0012660026550293

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00076198577880859

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '9n2ucp4frik6195pcr5jo2onsnrjv454'
AND `ip_address` = '::1' 
 Execution Time:0.00077486038208008

SELECT GET_LOCK('073916f731177d9f40ffab4f54e6bfd2', 300) AS ci_session_lock 
 Execution Time:0.00051093101501465

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '9n2ucp4frik6195pcr5jo2onsnrjv454'
AND `ip_address` = '::1' 
 Execution Time:0.00067806243896484

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0051250457763672

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0013439655303955

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00079798698425293

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0014810562133789

SHOW TABLES FROM `ospos` 
 Execution Time:0.0052089691162109

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00049090385437012

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00059700012207031

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00055122375488281

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00042581558227539

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00048303604125977

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00040602684020996

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00047206878662109

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0011248588562012

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00078582763671875

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '9n2ucp4frik6195pcr5jo2onsnrjv454'
AND `ip_address` = '::1' 
 Execution Time:0.00057792663574219

SELECT GET_LOCK('073916f731177d9f40ffab4f54e6bfd2', 300) AS ci_session_lock 
 Execution Time:0.00037693977355957

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '9n2ucp4frik6195pcr5jo2onsnrjv454'
AND `ip_address` = '::1' 
 Execution Time:0.00046181678771973

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00057506561279297

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00069093704223633

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00041079521179199

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00086307525634766

SHOW TABLES FROM `ospos` 
 Execution Time:0.0043208599090576

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00050592422485352

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00066995620727539

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0011770725250244

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0019428730010986

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00090885162353516

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00048995018005371

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00074100494384766

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '9n2ucp4frik6195pcr5jo2onsnrjv454'
AND `ip_address` = '::1' 
 Execution Time:0.0031208992004395

SELECT GET_LOCK('073916f731177d9f40ffab4f54e6bfd2', 300) AS ci_session_lock 
 Execution Time:0.00033903121948242

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '9n2ucp4frik6195pcr5jo2onsnrjv454'
AND `ip_address` = '::1' 
 Execution Time:0.0004580020904541

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.063797950744629

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.047465085983276

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.0054469108581543

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0035099983215332

SHOW TABLES FROM `ospos` 
 Execution Time:0.017393827438354

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00051307678222656

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.002479076385498

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0011858940124512

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0013279914855957

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00086379051208496

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0006861686706543

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.044934034347534

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.019780874252319

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.02672004699707

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '9n2ucp4frik6195pcr5jo2onsnrjv454'
AND `ip_address` = '::1' 
 Execution Time:0.00055408477783203

SELECT GET_LOCK('073916f731177d9f40ffab4f54e6bfd2', 300) AS ci_session_lock 
 Execution Time:0.014932870864868

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '9n2ucp4frik6195pcr5jo2onsnrjv454'
AND `ip_address` = '::1' 
 Execution Time:0.00064396858215332

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00057005882263184

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00041699409484863

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00033187866210938

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0026659965515137

SHOW TABLES FROM `ospos` 
 Execution Time:0.0040650367736816

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0024559497833252

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0016188621520996

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0070550441741943

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0097959041595459

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.012378931045532

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0048110485076904

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00086188316345215

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '9n2ucp4frik6195pcr5jo2onsnrjv454'
AND `ip_address` = '::1' 
 Execution Time:0.00083494186401367

SELECT GET_LOCK('073916f731177d9f40ffab4f54e6bfd2', 300) AS ci_session_lock 
 Execution Time:0.0004889965057373

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '9n2ucp4frik6195pcr5jo2onsnrjv454'
AND `ip_address` = '::1' 
 Execution Time:0.0013318061828613

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0029208660125732

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0010941028594971

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00044393539428711

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00083398818969727

SHOW TABLES FROM `ospos` 
 Execution Time:0.005828857421875

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00049090385437012

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00061392784118652

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00063800811767578

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00047802925109863

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00045108795166016

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00060582160949707

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00060796737670898

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '9n2ucp4frik6195pcr5jo2onsnrjv454'
AND `ip_address` = '::1' 
 Execution Time:0.0029928684234619

SELECT GET_LOCK('073916f731177d9f40ffab4f54e6bfd2', 300) AS ci_session_lock 
 Execution Time:0.00053000450134277

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '9n2ucp4frik6195pcr5jo2onsnrjv454'
AND `ip_address` = '::1' 
 Execution Time:0.00073003768920898

UPDATE `ospos_sessions` SET `timestamp` = 1698414868, `data` = '__ci_last_regenerate|i:1698414868;person_id|s:1:\"1\";menu_group|s:6:\"office\";'
WHERE `id` = '9n2ucp4frik6195pcr5jo2onsnrjv454'
AND `ip_address` = '::1' 
 Execution Time:0.0038688182830811

SELECT RELEASE_LOCK('073916f731177d9f40ffab4f54e6bfd2') AS ci_session_lock 
 Execution Time:0.00037193298339844

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '9n2ucp4frik6195pcr5jo2onsnrjv454'
AND `ip_address` = '::1' 
 Execution Time:0.00062894821166992

SELECT GET_LOCK('e73397c1fc383704d31142047c6a715c', 300) AS ci_session_lock 
 Execution Time:0.00041699409484863

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'koaocd4ld6inaq1j9qes1kgv06pn7tbu'
AND `ip_address` = '::1' 
 Execution Time:0.0006718635559082

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00059604644775391

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00067591667175293

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.000518798828125

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00099611282348633

SHOW TABLES FROM `ospos` 
 Execution Time:0.0043990612030029

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0025639533996582

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0014920234680176

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00063800811767578

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00084900856018066

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00054788589477539

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0019278526306152

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0017209053039551

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0025091171264648

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00086188316345215

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'koaocd4ld6inaq1j9qes1kgv06pn7tbu'
AND `ip_address` = '::1' 
 Execution Time:0.0017790794372559

SELECT GET_LOCK('e73397c1fc383704d31142047c6a715c', 300) AS ci_session_lock 
 Execution Time:0.00041604042053223

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'koaocd4ld6inaq1j9qes1kgv06pn7tbu'
AND `ip_address` = '::1' 
 Execution Time:0.00066399574279785

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00085592269897461

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0028970241546631

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00052809715270996

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0018370151519775

SHOW TABLES FROM `ospos` 
 Execution Time:0.0062689781188965

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0005800724029541

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00094103813171387

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0016109943389893

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0060889720916748

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0015730857849121

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00065207481384277

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00062203407287598

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'koaocd4ld6inaq1j9qes1kgv06pn7tbu'
AND `ip_address` = '::1' 
 Execution Time:0.00098609924316406

SELECT GET_LOCK('e73397c1fc383704d31142047c6a715c', 300) AS ci_session_lock 
 Execution Time:0.00030684471130371

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'koaocd4ld6inaq1j9qes1kgv06pn7tbu'
AND `ip_address` = '::1' 
 Execution Time:0.0005650520324707

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00068783760070801

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0029048919677734

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.0016601085662842

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0015938282012939

SHOW TABLES FROM `ospos` 
 Execution Time:0.0039479732513428

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0005340576171875

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00052285194396973

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00053501129150391

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00066590309143066

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00045990943908691

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00035786628723145

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00075101852416992

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00058102607727051

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00046420097351074

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'koaocd4ld6inaq1j9qes1kgv06pn7tbu'
AND `ip_address` = '::1' 
 Execution Time:0.00058603286743164

SELECT GET_LOCK('e73397c1fc383704d31142047c6a715c', 300) AS ci_session_lock 
 Execution Time:0.0003359317779541

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'koaocd4ld6inaq1j9qes1kgv06pn7tbu'
AND `ip_address` = '::1' 
 Execution Time:0.00044798851013184

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0006401538848877

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00050210952758789

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00037813186645508

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0010089874267578

SHOW TABLES FROM `ospos` 
 Execution Time:0.005033016204834

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0031139850616455

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0049960613250732

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.005173921585083

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0038621425628662

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0013189315795898

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.001352071762085

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0026800632476807

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'koaocd4ld6inaq1j9qes1kgv06pn7tbu'
AND `ip_address` = '::1' 
 Execution Time:0.0013492107391357

SELECT GET_LOCK('e73397c1fc383704d31142047c6a715c', 300) AS ci_session_lock 
 Execution Time:0.0010368824005127

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'koaocd4ld6inaq1j9qes1kgv06pn7tbu'
AND `ip_address` = '::1' 
 Execution Time:0.0023248195648193

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00084900856018066

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00054693222045898

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.0007169246673584

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00091004371643066

SHOW TABLES FROM `ospos` 
 Execution Time:0.0028488636016846

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00042915344238281

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00047612190246582

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0006101131439209

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00055909156799316

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00043797492980957

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00040602684020996

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00063204765319824

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'koaocd4ld6inaq1j9qes1kgv06pn7tbu'
AND `ip_address` = '::1' 
 Execution Time:0.00068283081054688

SELECT GET_LOCK('e73397c1fc383704d31142047c6a715c', 300) AS ci_session_lock 
 Execution Time:0.00037980079650879

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'koaocd4ld6inaq1j9qes1kgv06pn7tbu'
AND `ip_address` = '::1' 
 Execution Time:0.00062894821166992

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00062799453735352

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00055503845214844

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00043201446533203

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0090320110321045

SHOW TABLES FROM `ospos` 
 Execution Time:0.0050568580627441

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0013220310211182

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.003244161605835

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00075292587280273

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00067996978759766

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00061297416687012

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00050902366638184

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00081801414489746

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'koaocd4ld6inaq1j9qes1kgv06pn7tbu'
AND `ip_address` = '::1' 
 Execution Time:0.00071120262145996

SELECT GET_LOCK('e73397c1fc383704d31142047c6a715c', 300) AS ci_session_lock 
 Execution Time:0.00048613548278809

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'koaocd4ld6inaq1j9qes1kgv06pn7tbu'
AND `ip_address` = '::1' 
 Execution Time:0.00094199180603027

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00074100494384766

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00054001808166504

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.0010120868682861

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0029349327087402

SHOW TABLES FROM `ospos` 
 Execution Time:0.0044021606445312

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00046586990356445

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00053000450134277

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00062084197998047

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00053977966308594

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00041699409484863

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00034499168395996

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0007021427154541

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00072598457336426

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00065207481384277

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'koaocd4ld6inaq1j9qes1kgv06pn7tbu'
AND `ip_address` = '::1' 
 Execution Time:0.00053811073303223

SELECT GET_LOCK('e73397c1fc383704d31142047c6a715c', 300) AS ci_session_lock 
 Execution Time:0.00069308280944824

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'koaocd4ld6inaq1j9qes1kgv06pn7tbu'
AND `ip_address` = '::1' 
 Execution Time:0.0013689994812012

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0006561279296875

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00076389312744141

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00090503692626953

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0013630390167236

SHOW TABLES FROM `ospos` 
 Execution Time:0.0028300285339355

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0010960102081299

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00081896781921387

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00054097175598145

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00062680244445801

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00046300888061523

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00053596496582031

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00056314468383789

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'koaocd4ld6inaq1j9qes1kgv06pn7tbu'
AND `ip_address` = '::1' 
 Execution Time:0.00078415870666504

SELECT GET_LOCK('e73397c1fc383704d31142047c6a715c', 300) AS ci_session_lock 
 Execution Time:0.00036787986755371

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'koaocd4ld6inaq1j9qes1kgv06pn7tbu'
AND `ip_address` = '::1' 
 Execution Time:0.0005340576171875

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00057077407836914

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00042104721069336

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00030994415283203

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00075984001159668

SHOW TABLES FROM `ospos` 
 Execution Time:0.0037910938262939

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00045394897460938

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00053811073303223

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00089001655578613

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00072002410888672

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0014200210571289

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00071120262145996

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00075292587280273

SELECT *
FROM `ospos_item_rates`
WHERE `rate_id` = -1
AND `deleted` = 0 
 Execution Time:0.00063681602478027

SHOW COLUMNS FROM `ospos_item_rates` 
 Execution Time:0.074032783508301

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'koaocd4ld6inaq1j9qes1kgv06pn7tbu'
AND `ip_address` = '::1' 
 Execution Time:0.001615047454834

SELECT GET_LOCK('e73397c1fc383704d31142047c6a715c', 300) AS ci_session_lock 
 Execution Time:0.00092697143554688

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'koaocd4ld6inaq1j9qes1kgv06pn7tbu'
AND `ip_address` = '::1' 
 Execution Time:0.00075292587280273

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00076484680175781

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00066614151000977

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00062203407287598

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0011351108551025

SHOW TABLES FROM `ospos` 
 Execution Time:0.0052380561828613

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00040912628173828

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00063204765319824

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0035431385040283

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0011987686157227

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00047492980957031

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00039505958557129

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0049071311950684

SELECT *
FROM `ospos_item_rates`
WHERE `rate_id` = -1
AND `deleted` = 0 
 Execution Time:0.00046706199645996

SHOW COLUMNS FROM `ospos_item_rates` 
 Execution Time:0.030059814453125

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'koaocd4ld6inaq1j9qes1kgv06pn7tbu'
AND `ip_address` = '::1' 
 Execution Time:0.00056004524230957

SELECT GET_LOCK('e73397c1fc383704d31142047c6a715c', 300) AS ci_session_lock 
 Execution Time:0.00037908554077148

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'koaocd4ld6inaq1j9qes1kgv06pn7tbu'
AND `ip_address` = '::1' 
 Execution Time:0.00051188468933105

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00063705444335938

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00041413307189941

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00034189224243164

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00079989433288574

SHOW TABLES FROM `ospos` 
 Execution Time:0.0062429904937744

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00042009353637695

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00045418739318848

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00073885917663574

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00051593780517578

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00037217140197754

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00034117698669434

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00054097175598145

SELECT *
FROM `ospos_item_rates`
WHERE `rate_id` = -1
AND `deleted` = 0 
 Execution Time:0.001032829284668

SHOW COLUMNS FROM `ospos_item_rates` 
 Execution Time:0.042968034744263

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'koaocd4ld6inaq1j9qes1kgv06pn7tbu'
AND `ip_address` = '::1' 
 Execution Time:0.00060296058654785

SELECT GET_LOCK('e73397c1fc383704d31142047c6a715c', 300) AS ci_session_lock 
 Execution Time:0.00037622451782227

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'koaocd4ld6inaq1j9qes1kgv06pn7tbu'
AND `ip_address` = '::1' 
 Execution Time:0.0005040168762207

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0006110668182373

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00058913230895996

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00036001205444336

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0012500286102295

SHOW TABLES FROM `ospos` 
 Execution Time:0.0041639804840088

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0004119873046875

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00052094459533691

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00069785118103027

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00063014030456543

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00058102607727051

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00043702125549316

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00085091590881348

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00072097778320312

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00057220458984375

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'koaocd4ld6inaq1j9qes1kgv06pn7tbu'
AND `ip_address` = '::1' 
 Execution Time:0.0012519359588623

SELECT GET_LOCK('e73397c1fc383704d31142047c6a715c', 300) AS ci_session_lock 
 Execution Time:0.00036716461181641

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'koaocd4ld6inaq1j9qes1kgv06pn7tbu'
AND `ip_address` = '::1' 
 Execution Time:0.00043082237243652

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00066900253295898

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0004119873046875

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00045013427734375

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0015499591827393

SHOW TABLES FROM `ospos` 
 Execution Time:0.004241943359375

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.000823974609375

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00069403648376465

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0006098747253418

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00053691864013672

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00042915344238281

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00044703483581543

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0016059875488281

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'koaocd4ld6inaq1j9qes1kgv06pn7tbu'
AND `ip_address` = '::1' 
 Execution Time:0.00096988677978516

SELECT GET_LOCK('e73397c1fc383704d31142047c6a715c', 300) AS ci_session_lock 
 Execution Time:0.00046586990356445

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'koaocd4ld6inaq1j9qes1kgv06pn7tbu'
AND `ip_address` = '::1' 
 Execution Time:0.00063896179199219

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00067806243896484

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00043296813964844

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00036811828613281

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00077605247497559

SHOW TABLES FROM `ospos` 
 Execution Time:0.006580114364624

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00047397613525391

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00046896934509277

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00061511993408203

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00044894218444824

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00033998489379883

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00037002563476562

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00052118301391602

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00081086158752441

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00063800811767578

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'koaocd4ld6inaq1j9qes1kgv06pn7tbu'
AND `ip_address` = '::1' 
 Execution Time:0.00067615509033203

SELECT GET_LOCK('e73397c1fc383704d31142047c6a715c', 300) AS ci_session_lock 
 Execution Time:0.0023670196533203

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'koaocd4ld6inaq1j9qes1kgv06pn7tbu'
AND `ip_address` = '::1' 
 Execution Time:0.0033891201019287

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00069880485534668

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00057792663574219

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.0004580020904541

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00071406364440918

SHOW TABLES FROM `ospos` 
 Execution Time:0.0024881362915039

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00037002563476562

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0004429817199707

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00052213668823242

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00048089027404785

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0003349781036377

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00031185150146484

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00055599212646484

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'koaocd4ld6inaq1j9qes1kgv06pn7tbu'
AND `ip_address` = '::1' 
 Execution Time:0.00082612037658691

SELECT GET_LOCK('e73397c1fc383704d31142047c6a715c', 300) AS ci_session_lock 
 Execution Time:0.00049996376037598

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'koaocd4ld6inaq1j9qes1kgv06pn7tbu'
AND `ip_address` = '::1' 
 Execution Time:0.00053286552429199

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0014030933380127

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0021529197692871

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00081300735473633

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0021800994873047

SHOW TABLES FROM `ospos` 
 Execution Time:0.0053088665008545

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00046515464782715

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00060510635375977

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00062394142150879

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0004880428314209

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00059700012207031

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0014419555664062

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00052499771118164

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0169358253479

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.041676998138428

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'koaocd4ld6inaq1j9qes1kgv06pn7tbu'
AND `ip_address` = '::1' 
 Execution Time:0.00071215629577637

SELECT GET_LOCK('e73397c1fc383704d31142047c6a715c', 300) AS ci_session_lock 
 Execution Time:0.0010199546813965

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'koaocd4ld6inaq1j9qes1kgv06pn7tbu'
AND `ip_address` = '::1' 
 Execution Time:0.0010600090026855

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0006859302520752

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00056099891662598

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00039482116699219

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0011248588562012

SHOW TABLES FROM `ospos` 
 Execution Time:0.0037519931793213

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00034713745117188

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00043010711669922

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0005800724029541

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00054597854614258

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00070905685424805

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0033020973205566

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00052499771118164

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'koaocd4ld6inaq1j9qes1kgv06pn7tbu'
AND `ip_address` = '::1' 
 Execution Time:0.00058484077453613

SELECT GET_LOCK('e73397c1fc383704d31142047c6a715c', 300) AS ci_session_lock 
 Execution Time:0.00043582916259766

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'koaocd4ld6inaq1j9qes1kgv06pn7tbu'
AND `ip_address` = '::1' 
 Execution Time:0.00064182281494141

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00060701370239258

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00043201446533203

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00037503242492676

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00076198577880859

SHOW TABLES FROM `ospos` 
 Execution Time:0.0032339096069336

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00043988227844238

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00047588348388672

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00061702728271484

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00059604644775391

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00042414665222168

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00037288665771484

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00059914588928223

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00067400932312012

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00052022933959961

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'koaocd4ld6inaq1j9qes1kgv06pn7tbu'
AND `ip_address` = '::1' 
 Execution Time:0.000885009765625

SELECT GET_LOCK('e73397c1fc383704d31142047c6a715c', 300) AS ci_session_lock 
 Execution Time:0.0008540153503418

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'koaocd4ld6inaq1j9qes1kgv06pn7tbu'
AND `ip_address` = '::1' 
 Execution Time:0.00079989433288574

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00066018104553223

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00057291984558105

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00040102005004883

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0017719268798828

SHOW TABLES FROM `ospos` 
 Execution Time:0.0031590461730957

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00040602684020996

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00076103210449219

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.000579833984375

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00074911117553711

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00082612037658691

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0011370182037354

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00073504447937012

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00065994262695312

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00084400177001953

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'koaocd4ld6inaq1j9qes1kgv06pn7tbu'
AND `ip_address` = '::1' 
 Execution Time:0.00087308883666992

SELECT GET_LOCK('e73397c1fc383704d31142047c6a715c', 300) AS ci_session_lock 
 Execution Time:0.00040292739868164

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'koaocd4ld6inaq1j9qes1kgv06pn7tbu'
AND `ip_address` = '::1' 
 Execution Time:0.00051522254943848

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00079107284545898

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00066018104553223

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00052690505981445

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0014870166778564

SHOW TABLES FROM `ospos` 
 Execution Time:0.0030150413513184

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00061416625976562

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0014638900756836

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00087714195251465

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00063014030456543

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00067591667175293

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00081110000610352

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00077605247497559

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00070595741271973

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00056600570678711

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'koaocd4ld6inaq1j9qes1kgv06pn7tbu'
AND `ip_address` = '::1' 
 Execution Time:0.00061416625976562

SELECT GET_LOCK('e73397c1fc383704d31142047c6a715c', 300) AS ci_session_lock 
 Execution Time:0.00030708312988281

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'koaocd4ld6inaq1j9qes1kgv06pn7tbu'
AND `ip_address` = '::1' 
 Execution Time:0.00042986869812012

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00055313110351562

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00040602684020996

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00030207633972168

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0013160705566406

SHOW TABLES FROM `ospos` 
 Execution Time:0.0028111934661865

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00038504600524902

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00050497055053711

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00080204010009766

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00063419342041016

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0021939277648926

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099611282348633

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0005640983581543

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0017449855804443

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00073003768920898

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'koaocd4ld6inaq1j9qes1kgv06pn7tbu'
AND `ip_address` = '::1' 
 Execution Time:0.00078201293945312

SELECT GET_LOCK('e73397c1fc383704d31142047c6a715c', 300) AS ci_session_lock 
 Execution Time:0.00047993659973145

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'koaocd4ld6inaq1j9qes1kgv06pn7tbu'
AND `ip_address` = '::1' 
 Execution Time:0.00072693824768066

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00065898895263672

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00047206878662109

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00035309791564941

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00096607208251953

SHOW TABLES FROM `ospos` 
 Execution Time:0.0046920776367188

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00045204162597656

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00054001808166504

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00064706802368164

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00068497657775879

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00062298774719238

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0005950927734375

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00079989433288574

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00079512596130371

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0013949871063232

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'koaocd4ld6inaq1j9qes1kgv06pn7tbu'
AND `ip_address` = '::1' 
 Execution Time:0.0009920597076416

SELECT GET_LOCK('e73397c1fc383704d31142047c6a715c', 300) AS ci_session_lock 
 Execution Time:0.0004570484161377

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'koaocd4ld6inaq1j9qes1kgv06pn7tbu'
AND `ip_address` = '::1' 
 Execution Time:0.00051498413085938

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00063991546630859

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00068497657775879

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00040221214294434

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00081706047058105

SHOW TABLES FROM `ospos` 
 Execution Time:0.0034780502319336

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00072312355041504

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00060415267944336

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00053596496582031

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00052499771118164

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0005030632019043

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00052499771118164

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00067806243896484

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00078487396240234

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00054383277893066

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'koaocd4ld6inaq1j9qes1kgv06pn7tbu'
AND `ip_address` = '::1' 
 Execution Time:0.00060105323791504

SELECT GET_LOCK('e73397c1fc383704d31142047c6a715c', 300) AS ci_session_lock 
 Execution Time:0.00035810470581055

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'koaocd4ld6inaq1j9qes1kgv06pn7tbu'
AND `ip_address` = '::1' 
 Execution Time:0.00048208236694336

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00054812431335449

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'expenses!_categories%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00053691864013672

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'expenses!_categories!_%' ESCAPE '!' 
 Execution Time:0.00033211708068848

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00081205368041992

SHOW TABLES FROM `ospos` 
 Execution Time:0.0033769607543945

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00039315223693848

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00051712989807129

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00062298774719238

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00050687789916992

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00039410591125488

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00036001205444336

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00068998336791992

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010228157043457

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0009300708770752

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'koaocd4ld6inaq1j9qes1kgv06pn7tbu'
AND `ip_address` = '::1' 
 Execution Time:0.0012719631195068

SELECT GET_LOCK('e73397c1fc383704d31142047c6a715c', 300) AS ci_session_lock 
 Execution Time:0.00039005279541016

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'koaocd4ld6inaq1j9qes1kgv06pn7tbu'
AND `ip_address` = '::1' 
 Execution Time:0.00058293342590332

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00078296661376953

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'expenses!_categories%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00063180923461914

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'expenses!_categories!_%' ESCAPE '!' 
 Execution Time:0.00035881996154785

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00083303451538086

SHOW TABLES FROM `ospos` 
 Execution Time:0.0028469562530518

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00041699409484863

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00043296813964844

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0006098747253418

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00053095817565918

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00039792060852051

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0005180835723877

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00055599212646484

SELECT *
FROM `ospos_expense_categories` AS `expense_categories`
WHERE   (
`category_name` LIKE '%%' ESCAPE '!'
OR  `category_description` LIKE '%%' ESCAPE '!'
 )
AND `deleted` = 0
 LIMIT 25 
 Execution Time:0.0026721954345703

SELECT COUNT(expense_categories.expense_category_id) as count
FROM `ospos_expense_categories` AS `expense_categories`
WHERE   (
`category_name` LIKE '%%' ESCAPE '!'
OR  `category_description` LIKE '%%' ESCAPE '!'
 )
AND `deleted` = 0 
 Execution Time:0.00051188468933105

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'koaocd4ld6inaq1j9qes1kgv06pn7tbu'
AND `ip_address` = '::1' 
 Execution Time:0.0025088787078857

SELECT GET_LOCK('e73397c1fc383704d31142047c6a715c', 300) AS ci_session_lock 
 Execution Time:0.00048589706420898

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'koaocd4ld6inaq1j9qes1kgv06pn7tbu'
AND `ip_address` = '::1' 
 Execution Time:0.0011148452758789

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00084495544433594

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'expenses!_categories%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00085997581481934

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'expenses!_categories!_%' ESCAPE '!' 
 Execution Time:0.00083518028259277

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0013928413391113

SHOW TABLES FROM `ospos` 
 Execution Time:0.0029668807983398

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00057411193847656

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00089406967163086

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0018079280853271

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00059008598327637

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0006260871887207

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00058507919311523

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00063705444335938

SELECT *
FROM `ospos_expense_categories`
WHERE `expense_category_id` = -1
AND `deleted` = 0 
 Execution Time:0.00081086158752441

SHOW COLUMNS FROM `ospos_expense_categories` 
 Execution Time:0.030772924423218

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'koaocd4ld6inaq1j9qes1kgv06pn7tbu'
AND `ip_address` = '::1' 
 Execution Time:0.00059795379638672

SELECT GET_LOCK('e73397c1fc383704d31142047c6a715c', 300) AS ci_session_lock 
 Execution Time:0.00050783157348633

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'koaocd4ld6inaq1j9qes1kgv06pn7tbu'
AND `ip_address` = '::1' 
 Execution Time:0.00056910514831543

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00075221061706543

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'config%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00045990943908691

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'config!_%' ESCAPE '!' 
 Execution Time:0.0003209114074707

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00093388557434082

SHOW TABLES FROM `ospos` 
 Execution Time:0.0031571388244629

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00060510635375977

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00070095062255859

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00058197975158691

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0009160041809082

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0006721019744873

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00045394897460938

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00059413909912109

SELECT *
FROM `ospos_stock_locations`
WHERE `deleted` = 0 
 Execution Time:0.0026419162750244

SELECT *
FROM `ospos_dinner_tables`
WHERE `deleted` = 0 
 Execution Time:0.001194953918457

SELECT *
FROM `ospos_customers_packages`
WHERE `deleted` = 0 
 Execution Time:0.0014209747314453

SELECT *
FROM `ospos_tax_codes`
WHERE `deleted` = 0
ORDER BY `tax_code_name` ASC 
 Execution Time:0.0013880729675293

SELECT *
FROM `ospos_tax_categories`
WHERE `deleted` = 0
ORDER BY `tax_group_sequence` ASC, `tax_category` ASC 
 Execution Time:0.0010709762573242

SELECT *
FROM `ospos_tax_jurisdictions`
WHERE `deleted` = 0
ORDER BY `jurisdiction_name` ASC 
 Execution Time:0.00091385841369629

SELECT `sort`
FROM `ospos_grants`, `ospos_modules`
WHERE `module_id` = 'office' 
 Execution Time:0.00040793418884277

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'mailchimp_api_key'
 LIMIT 1 
 Execution Time:0.00053882598876953

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.001439094543457

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'koaocd4ld6inaq1j9qes1kgv06pn7tbu'
AND `ip_address` = '::1' 
 Execution Time:0.00061511993408203

SELECT GET_LOCK('e73397c1fc383704d31142047c6a715c', 300) AS ci_session_lock 
 Execution Time:0.00037980079650879

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'koaocd4ld6inaq1j9qes1kgv06pn7tbu'
AND `ip_address` = '::1' 
 Execution Time:0.0010080337524414

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0013980865478516

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE '%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00074100494384766

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0011539459228516

SHOW TABLES FROM `ospos` 
 Execution Time:0.0048999786376953

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00040698051452637

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00048995018005371

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00060200691223145

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00046491622924805

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00057411193847656

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00065207481384277

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00055217742919922

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'koaocd4ld6inaq1j9qes1kgv06pn7tbu'
AND `ip_address` = '::1' 
 Execution Time:0.00062012672424316

SELECT GET_LOCK('e73397c1fc383704d31142047c6a715c', 300) AS ci_session_lock 
 Execution Time:0.0004429817199707

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'koaocd4ld6inaq1j9qes1kgv06pn7tbu'
AND `ip_address` = '::1' 
 Execution Time:0.00060892105102539

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00077700614929199

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0007331371307373

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0010511875152588

SHOW TABLES FROM `ospos` 
 Execution Time:0.0062968730926514

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00062704086303711

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0012531280517578

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00073504447937012

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0012049674987793

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00069808959960938

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0042500495910645

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0020740032196045

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1' 
 Execution Time:0.00064706802368164

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.0006718635559082

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_receivings'
 LIMIT 1 
 Execution Time:0.00043988227844238

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_customers'
 LIMIT 1 
 Execution Time:0.00045204162597656

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_discounts'
 LIMIT 1 
 Execution Time:0.0003659725189209

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.00036811828613281

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_suppliers'
 LIMIT 1 
 Execution Time:0.00050687789916992

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_suppliersgls'
 LIMIT 1 
 Execution Time:0.00047397613525391

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.00043082237243652

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'koaocd4ld6inaq1j9qes1kgv06pn7tbu'
AND `ip_address` = '::1' 
 Execution Time:0.00084519386291504

SELECT GET_LOCK('e73397c1fc383704d31142047c6a715c', 300) AS ci_session_lock 
 Execution Time:0.00054788589477539

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'koaocd4ld6inaq1j9qes1kgv06pn7tbu'
AND `ip_address` = '::1' 
 Execution Time:0.0012340545654297

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00069713592529297

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00078797340393066

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00095009803771973

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00042605400085449

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_suppliersgls'
 LIMIT 1 
 Execution Time:0.00032210350036621

SHOW TABLES FROM `ospos` 
 Execution Time:0.0037569999694824

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0011799335479736

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00071287155151367

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0006868839263916

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0004880428314209

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0019888877868652

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00055694580078125

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00068306922912598

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_suppliers`.`person_id` = `ospos_people`.`person_id`
WHERE `category` = 0
AND `deleted` = 0
ORDER BY `company_name` ASC 
 Execution Time:0.0071389675140381

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'koaocd4ld6inaq1j9qes1kgv06pn7tbu'
AND `ip_address` = '::1' 
 Execution Time:0.0040159225463867

SELECT GET_LOCK('e73397c1fc383704d31142047c6a715c', 300) AS ci_session_lock 
 Execution Time:0.00092601776123047

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'koaocd4ld6inaq1j9qes1kgv06pn7tbu'
AND `ip_address` = '::1' 
 Execution Time:0.00095415115356445

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00079083442687988

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0010890960693359

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0012660026550293

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00065898895263672

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_suppliersgls'
 LIMIT 1 
 Execution Time:0.0048069953918457

SHOW TABLES FROM `ospos` 
 Execution Time:0.0097310543060303

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00046920776367188

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00055384635925293

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00062894821166992

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0030570030212402

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0018620491027832

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00057816505432129

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00059604644775391

CREATE Temporary  TABLE IF NOT EXISTS ospos_temp_gl_op (INDEX(supplier_id)) ENGINE=MEMORY
			(

				SELECT 0 as ledger_id,
					'PV' as payment_type,
					sp.agency_name AS supplier_name,
					sl.supplier_id,
					case when SUM(ROUND(sl.debit_amount, 2)) > SUM(ROUND(sl.credit_amount, 2)) then SUM(ROUND(sl.debit_amount, 2))-SUM(ROUND(sl.credit_amount, 2)) else 0 end AS debit_amount,
					case when SUM(ROUND(sl.credit_amount, 2)) > SUM(ROUND(sl.debit_amount, 2)) then SUM(ROUND(sl.credit_amount, 2))-SUM(ROUND(sl.debit_amount, 2)) else 0 end AS credit_amount,
					0 AS balance,
					MAX(DATE(ledger_time)) AS ledger_time,
					'Opening Balance' as reference,
					'--' as trans_type,
					'--' as user,
					0 as employee_id
				FROM ospos_supplier_ledgers AS sl
				LEFT OUTER JOIN ospos_suppliers AS sp
					ON sl.supplier_id = sp.person_id
				LEFT OUTER JOIN ospos_employees AS ep
					ON ep.person_id = sl.employee_id 
				WHERE DATE(sl.ledger_time) < '2023-10-27' and  sl.supplier_id = 5
				GROUP BY sl.supplier_id, sp.agency_name
			); 
 Execution Time:0.0047318935394287

CREATE  temporary TABLE IF NOT EXISTS ospos_temp_gl (INDEX(ledger_id), INDEX(supplier_id)) ENGINE=MEMORY
			(
				
				SELECT sl.ledger_id,
					sl.payment_type,
					sp.agency_name AS supplier_name,
					sl.supplier_id,
					(ROUND(sl.debit_amount, 2)) AS debit_amount,
					(ROUND(sl.credit_amount, 2)) AS credit_amount,
					(ROUND(sl.balance, 2)) AS balance,
					ledger_time,
					reference,
					trans_type,
					ep.username as user,
					sl.employee_id
				FROM ospos_supplier_ledgers AS sl
				LEFT OUTER JOIN ospos_suppliers AS sp
					ON sl.supplier_id = sp.person_id
				LEFT OUTER JOIN ospos_employees AS ep
					ON ep.person_id = sl.employee_id 
				WHERE DATE(sl.ledger_time) BETWEEN '2023-10-27' AND '2023-10-27' and  sl.supplier_id = 5
				GROUP BY ledger_id, ledger_time
			);

			
			 
 Execution Time:0.0011200904846191

insert into ospos_temp_gl select *from ospos_temp_gl_op; 
 Execution Time:0.0003669261932373

SELECT `ledger_id`, `ledger_time`, `payment_type`, `supplier_name`, `employee_id`, `reference`, `debit_amount`, `credit_amount`, `balance`, `trans_type`, `user`
FROM `ospos_temp_gl`
WHERE `supplier_id` = '5'
ORDER BY `ledger_id` 
 Execution Time:0.00031495094299316

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_suppliers`.`person_id`
WHERE `ospos_suppliers`.`person_id` = '5' 
 Execution Time:0.00075817108154297

SELECT SUM(debit_amount) debit_sum, SUM(credit_amount) credit_sum, case when SUM(ROUND(debit_amount, 2)) > SUM(ROUND(credit_amount, 2)) then SUM(ROUND(debit_amount, 2))-SUM(ROUND(credit_amount, 2)) else 0 end AS debit_amount_balance, case when SUM(ROUND(credit_amount, 2)) > SUM(ROUND(debit_amount, 2)) then SUM(ROUND(credit_amount, 2))-SUM(ROUND(debit_amount, 2)) else 0 end AS credit_amount_balance
FROM `ospos_temp_gl`
WHERE `supplier_id` = '5' 
 Execution Time:0.00053501129150391

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00069212913513184

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00052714347839355

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'koaocd4ld6inaq1j9qes1kgv06pn7tbu'
AND `ip_address` = '::1' 
 Execution Time:0.00099802017211914

SELECT GET_LOCK('e73397c1fc383704d31142047c6a715c', 300) AS ci_session_lock 
 Execution Time:0.0004270076751709

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'koaocd4ld6inaq1j9qes1kgv06pn7tbu'
AND `ip_address` = '::1' 
 Execution Time:0.00072503089904785

UPDATE `ospos_sessions` SET `timestamp` = 1698415170, `data` = '__ci_last_regenerate|i:1698415170;person_id|s:1:\"1\";menu_group|s:4:\"home\";'
WHERE `id` = 'koaocd4ld6inaq1j9qes1kgv06pn7tbu'
AND `ip_address` = '::1' 
 Execution Time:0.0041911602020264

SELECT RELEASE_LOCK('e73397c1fc383704d31142047c6a715c') AS ci_session_lock 
 Execution Time:0.00035500526428223

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'koaocd4ld6inaq1j9qes1kgv06pn7tbu'
AND `ip_address` = '::1' 
 Execution Time:0.0010941028594971

SELECT GET_LOCK('3425633b1bb6328646dab9961f17941e', 300) AS ci_session_lock 
 Execution Time:0.00033998489379883

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '89kj24euufa9ig7soagrk18mp9gi92i9'
AND `ip_address` = '::1' 
 Execution Time:0.00083494186401367

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00065398216247559

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00063204765319824

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00094985961914062

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00047087669372559

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_suppliersgls'
 LIMIT 1 
 Execution Time:0.00034213066101074

SHOW TABLES FROM `ospos` 
 Execution Time:0.0033469200134277

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0069139003753662

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0011401176452637

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00066900253295898

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0008091926574707

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00058221817016602

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00084900856018066

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0011930465698242

CREATE Temporary  TABLE IF NOT EXISTS ospos_temp_gl_op (INDEX(supplier_id)) ENGINE=MEMORY
			(

				SELECT 0 as ledger_id,
					'PV' as payment_type,
					sp.agency_name AS supplier_name,
					sl.supplier_id,
					case when SUM(ROUND(sl.debit_amount, 2)) > SUM(ROUND(sl.credit_amount, 2)) then SUM(ROUND(sl.debit_amount, 2))-SUM(ROUND(sl.credit_amount, 2)) else 0 end AS debit_amount,
					case when SUM(ROUND(sl.credit_amount, 2)) > SUM(ROUND(sl.debit_amount, 2)) then SUM(ROUND(sl.credit_amount, 2))-SUM(ROUND(sl.debit_amount, 2)) else 0 end AS credit_amount,
					0 AS balance,
					MAX(DATE(ledger_time)) AS ledger_time,
					'Opening Balance' as reference,
					'--' as trans_type,
					'--' as user,
					0 as employee_id
				FROM ospos_supplier_ledgers AS sl
				LEFT OUTER JOIN ospos_suppliers AS sp
					ON sl.supplier_id = sp.person_id
				LEFT OUTER JOIN ospos_employees AS ep
					ON ep.person_id = sl.employee_id 
				WHERE DATE(sl.ledger_time) < '2023-10-27' and  sl.supplier_id = 5
				GROUP BY sl.supplier_id, sp.agency_name
			); 
 Execution Time:0.0045089721679688

CREATE  temporary TABLE IF NOT EXISTS ospos_temp_gl (INDEX(ledger_id), INDEX(supplier_id)) ENGINE=MEMORY
			(
				
				SELECT sl.ledger_id,
					sl.payment_type,
					sp.agency_name AS supplier_name,
					sl.supplier_id,
					(ROUND(sl.debit_amount, 2)) AS debit_amount,
					(ROUND(sl.credit_amount, 2)) AS credit_amount,
					(ROUND(sl.balance, 2)) AS balance,
					ledger_time,
					reference,
					trans_type,
					ep.username as user,
					sl.employee_id
				FROM ospos_supplier_ledgers AS sl
				LEFT OUTER JOIN ospos_suppliers AS sp
					ON sl.supplier_id = sp.person_id
				LEFT OUTER JOIN ospos_employees AS ep
					ON ep.person_id = sl.employee_id 
				WHERE DATE(sl.ledger_time) BETWEEN '2023-10-27' AND '2023-10-27' and  sl.supplier_id = 5
				GROUP BY ledger_id, ledger_time
			);

			
			 
 Execution Time:0.0046079158782959

insert into ospos_temp_gl select *from ospos_temp_gl_op; 
 Execution Time:0.00041794776916504

SELECT `ledger_id`, `ledger_time`, `payment_type`, `supplier_name`, `employee_id`, `reference`, `debit_amount`, `credit_amount`, `balance`, `trans_type`, `user`
FROM `ospos_temp_gl`
WHERE `supplier_id` = '5'
ORDER BY `ledger_id` 
 Execution Time:0.00032997131347656

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_suppliers`.`person_id`
WHERE `ospos_suppliers`.`person_id` = '5' 
 Execution Time:0.00056815147399902

SELECT SUM(debit_amount) debit_sum, SUM(credit_amount) credit_sum, case when SUM(ROUND(debit_amount, 2)) > SUM(ROUND(credit_amount, 2)) then SUM(ROUND(debit_amount, 2))-SUM(ROUND(credit_amount, 2)) else 0 end AS debit_amount_balance, case when SUM(ROUND(credit_amount, 2)) > SUM(ROUND(debit_amount, 2)) then SUM(ROUND(credit_amount, 2))-SUM(ROUND(debit_amount, 2)) else 0 end AS credit_amount_balance
FROM `ospos_temp_gl`
WHERE `supplier_id` = '5' 
 Execution Time:0.00061416625976562

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0033378601074219

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.001399040222168

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '89kj24euufa9ig7soagrk18mp9gi92i9'
AND `ip_address` = '::1' 
 Execution Time:0.00061392784118652

SELECT GET_LOCK('3425633b1bb6328646dab9961f17941e', 300) AS ci_session_lock 
 Execution Time:0.00041699409484863

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '89kj24euufa9ig7soagrk18mp9gi92i9'
AND `ip_address` = '::1' 
 Execution Time:0.00047516822814941

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00066709518432617

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'customers%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00075483322143555

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'customers!_%' ESCAPE '!' 
 Execution Time:0.00049996376037598

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0013210773468018

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'mailchimp_api_key'
 LIMIT 1 
 Execution Time:0.00046801567077637

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'mailchimp_list_id'
 LIMIT 1 
 Execution Time:0.00030398368835449

SHOW TABLES FROM `ospos` 
 Execution Time:0.0029151439666748

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.001352071762085

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00063586235046387

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00063800811767578

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00075697898864746

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0008549690246582

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00093698501586914

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00055789947509766

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'messages'
 LIMIT 1 
 Execution Time:0.0007319450378418

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0008399486541748

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00084400177001953

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '89kj24euufa9ig7soagrk18mp9gi92i9'
AND `ip_address` = '::1' 
 Execution Time:0.00083398818969727

SELECT GET_LOCK('3425633b1bb6328646dab9961f17941e', 300) AS ci_session_lock 
 Execution Time:0.0039730072021484

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '89kj24euufa9ig7soagrk18mp9gi92i9'
AND `ip_address` = '::1' 
 Execution Time:0.0029079914093018

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00518798828125

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'customers%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00069093704223633

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'customers!_%' ESCAPE '!' 
 Execution Time:0.000762939453125

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00089001655578613

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'mailchimp_api_key'
 LIMIT 1 
 Execution Time:0.0022671222686768

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'mailchimp_list_id'
 LIMIT 1 
 Execution Time:0.0061178207397461

SHOW TABLES FROM `ospos` 
 Execution Time:0.002795934677124

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0043511390686035

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00084495544433594

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0036251544952393

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.003903865814209

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00056290626525879

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00057506561279297

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00071406364440918

SELECT *
FROM `ospos_customers` AS `customers`
JOIN `ospos_people` ON `customers`.`person_id` = `ospos_people`.`person_id`
WHERE   (
`first_name` LIKE '%%' ESCAPE '!'
OR  `last_name` LIKE '%%' ESCAPE '!'
OR  `email` LIKE '%%' ESCAPE '!'
OR  `phone_number` LIKE '%%' ESCAPE '!'
OR  `account_number` LIKE '%%' ESCAPE '!'
OR  `company_name` LIKE '%%' ESCAPE '!'
OR  CONCAT(first_name, " ", last_name) LIKE '%%' ESCAPE '!'
 )
AND `deleted` = 0
 LIMIT 25 
 Execution Time:0.0036489963531494

SELECT COUNT(customers.person_id) as count
FROM `ospos_customers` AS `customers`
JOIN `ospos_people` ON `customers`.`person_id` = `ospos_people`.`person_id`
WHERE   (
`first_name` LIKE '%%' ESCAPE '!'
OR  `last_name` LIKE '%%' ESCAPE '!'
OR  `email` LIKE '%%' ESCAPE '!'
OR  `phone_number` LIKE '%%' ESCAPE '!'
OR  `account_number` LIKE '%%' ESCAPE '!'
OR  `company_name` LIKE '%%' ESCAPE '!'
OR  CONCAT(first_name, " ", last_name) LIKE '%%' ESCAPE '!'
 )
AND `deleted` = 0 
 Execution Time:0.00084781646728516

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_temp (INDEX(sale_id)) ENGINE=MEMORY
			(
				SELECT
					sales.sale_id AS sale_id,
					AVG(sales_items.discount) AS avg_discount,
					SUM(sales_items.quantity_purchased) AS quantity
				FROM ospos_sales AS sales
				INNER JOIN ospos_sales_items AS sales_items
					ON sales_items.sale_id = sales.sale_id
				WHERE sales.customer_id = '3'
				GROUP BY sale_id
			) 
 Execution Time:0.0025730133056641

SELECT SUM(sales_payments.payment_amount - sales_payments.cash_refund) AS total, MIN(sales_payments.payment_amount - sales_payments.cash_refund) AS min, MAX(sales_payments.payment_amount - sales_payments.cash_refund) AS max, AVG(sales_payments.payment_amount - sales_payments.cash_refund) AS average, ROUND(AVG(sales_items_temp.avg_discount), 2) AS avg_discount, ROUND(SUM(sales_items_temp.quantity), 0) AS quantity
FROM `ospos_sales`
JOIN `ospos_sales_payments` AS `sales_payments` ON `ospos_sales`.`sale_id` = `sales_payments`.`sale_id`
JOIN `ospos_sales_items_temp` AS `sales_items_temp` ON `ospos_sales`.`sale_id` = `sales_items_temp`.`sale_id`
WHERE `ospos_sales`.`customer_id` = '3'
AND `ospos_sales`.`sale_status` = 0
GROUP BY `ospos_sales`.`customer_id` 
 Execution Time:0.0021240711212158

DROP TEMPORARY TABLE IF EXISTS ospos_sales_items_temp 
 Execution Time:0.00032901763916016

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_temp (INDEX(sale_id)) ENGINE=MEMORY
			(
				SELECT
					sales.sale_id AS sale_id,
					AVG(sales_items.discount) AS avg_discount,
					SUM(sales_items.quantity_purchased) AS quantity
				FROM ospos_sales AS sales
				INNER JOIN ospos_sales_items AS sales_items
					ON sales_items.sale_id = sales.sale_id
				WHERE sales.customer_id = '6'
				GROUP BY sale_id
			) 
 Execution Time:0.0032758712768555

SELECT SUM(sales_payments.payment_amount - sales_payments.cash_refund) AS total, MIN(sales_payments.payment_amount - sales_payments.cash_refund) AS min, MAX(sales_payments.payment_amount - sales_payments.cash_refund) AS max, AVG(sales_payments.payment_amount - sales_payments.cash_refund) AS average, ROUND(AVG(sales_items_temp.avg_discount), 2) AS avg_discount, ROUND(SUM(sales_items_temp.quantity), 0) AS quantity
FROM `ospos_sales`
JOIN `ospos_sales_payments` AS `sales_payments` ON `ospos_sales`.`sale_id` = `sales_payments`.`sale_id`
JOIN `ospos_sales_items_temp` AS `sales_items_temp` ON `ospos_sales`.`sale_id` = `sales_items_temp`.`sale_id`
WHERE `ospos_sales`.`customer_id` = '6'
AND `ospos_sales`.`sale_status` = 0
GROUP BY `ospos_sales`.`customer_id` 
 Execution Time:0.0022969245910645

DROP TEMPORARY TABLE IF EXISTS ospos_sales_items_temp 
 Execution Time:0.0007932186126709

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '89kj24euufa9ig7soagrk18mp9gi92i9'
AND `ip_address` = '::1' 
 Execution Time:0.0010819435119629

SELECT GET_LOCK('3425633b1bb6328646dab9961f17941e', 300) AS ci_session_lock 
 Execution Time:0.00047111511230469

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '89kj24euufa9ig7soagrk18mp9gi92i9'
AND `ip_address` = '::1' 
 Execution Time:0.00076389312744141

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00059819221496582

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'customers%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0004727840423584

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'customers!_%' ESCAPE '!' 
 Execution Time:0.00034022331237793

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0018908977508545

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'mailchimp_api_key'
 LIMIT 1 
 Execution Time:0.00044512748718262

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'mailchimp_list_id'
 LIMIT 1 
 Execution Time:0.0002748966217041

SHOW TABLES FROM `ospos` 
 Execution Time:0.0062549114227295

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00057578086853027

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00075697898864746

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00079584121704102

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00071215629577637

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00093197822570801

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00070595741271973

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00091981887817383

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:0.0038177967071533

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:0.0010831356048584

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.076866865158081

SHOW COLUMNS FROM `ospos_customers` 
 Execution Time:0.018819093704224

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00085997581481934

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00072407722473145

SELECT *
FROM `ospos_tax_codes`
WHERE `tax_code_id` = ''
AND `deleted` = 0 
 Execution Time:0.00062394142150879

SHOW COLUMNS FROM `ospos_tax_codes` 
 Execution Time:0.0087780952453613

SELECT *
FROM `ospos_customers_packages`
WHERE `deleted` = 0 
 Execution Time:0.0008549690246582

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_temp (INDEX(sale_id)) ENGINE=MEMORY
			(
				SELECT
					sales.sale_id AS sale_id,
					AVG(sales_items.discount) AS avg_discount,
					SUM(sales_items.quantity_purchased) AS quantity
				FROM ospos_sales AS sales
				INNER JOIN ospos_sales_items AS sales_items
					ON sales_items.sale_id = sales.sale_id
				WHERE sales.customer_id = -1
				GROUP BY sale_id
			) 
 Execution Time:0.00089693069458008

SELECT SUM(sales_payments.payment_amount - sales_payments.cash_refund) AS total, MIN(sales_payments.payment_amount - sales_payments.cash_refund) AS min, MAX(sales_payments.payment_amount - sales_payments.cash_refund) AS max, AVG(sales_payments.payment_amount - sales_payments.cash_refund) AS average, ROUND(AVG(sales_items_temp.avg_discount), 2) AS avg_discount, ROUND(SUM(sales_items_temp.quantity), 0) AS quantity
FROM `ospos_sales`
JOIN `ospos_sales_payments` AS `sales_payments` ON `ospos_sales`.`sale_id` = `sales_payments`.`sale_id`
JOIN `ospos_sales_items_temp` AS `sales_items_temp` ON `ospos_sales`.`sale_id` = `sales_items_temp`.`sale_id`
WHERE `ospos_sales`.`customer_id` = -1
AND `ospos_sales`.`sale_status` = 0
GROUP BY `ospos_sales`.`customer_id` 
 Execution Time:0.00060319900512695

DROP TEMPORARY TABLE IF EXISTS ospos_sales_items_temp 
 Execution Time:0.00045490264892578

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00056004524230957

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '89kj24euufa9ig7soagrk18mp9gi92i9'
AND `ip_address` = '::1' 
 Execution Time:0.00088596343994141

SELECT GET_LOCK('3425633b1bb6328646dab9961f17941e', 300) AS ci_session_lock 
 Execution Time:0.00035309791564941

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '89kj24euufa9ig7soagrk18mp9gi92i9'
AND `ip_address` = '::1' 
 Execution Time:0.00041484832763672

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00081205368041992

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00075292587280273

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0012581348419189

SHOW TABLES FROM `ospos` 
 Execution Time:0.004889965057373

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00045180320739746

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00051093101501465

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0014331340789795

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00095009803771973

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00084400177001953

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00084400177001953

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00074887275695801

SELECT *
FROM `ospos_dinner_tables`
WHERE `status` = 0
OR `dinner_table_id` IS NULL
AND `deleted` = 0 
 Execution Time:0.0032479763031006

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.0014240741729736

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0
 LIMIT 1 
 Execution Time:0.0014359951019287

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:0.00071501731872559

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:0.00049614906311035

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.034096956253052

SHOW COLUMNS FROM `ospos_customers` 
 Execution Time:0.010552883148193

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0006709098815918

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'items'
 LIMIT 1 
 Execution Time:0.00066804885864258

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00055599212646484

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'sales_change_price'
 LIMIT 1 
 Execution Time:0.00079894065856934

SELECT COUNT(*) AS `numrows`
FROM `ospos_sales`
WHERE `invoice_number` IS NOT NULL 
 Execution Time:0.00091409683227539

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00077700614929199

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '89kj24euufa9ig7soagrk18mp9gi92i9'
AND `ip_address` = '::1' 
 Execution Time:0.00065207481384277

SELECT GET_LOCK('3425633b1bb6328646dab9961f17941e', 300) AS ci_session_lock 
 Execution Time:0.00072002410888672

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '89kj24euufa9ig7soagrk18mp9gi92i9'
AND `ip_address` = '::1' 
 Execution Time:0.0012619495391846

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00066995620727539

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'customers%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00045013427734375

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'customers!_%' ESCAPE '!' 
 Execution Time:0.00033402442932129

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00086808204650879

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'mailchimp_api_key'
 LIMIT 1 
 Execution Time:0.00044107437133789

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'mailchimp_list_id'
 LIMIT 1 
 Execution Time:0.00028705596923828

SHOW TABLES FROM `ospos` 
 Execution Time:0.0041508674621582

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00052785873413086

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0016160011291504

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.001676082611084

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00059294700622559

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00056815147399902

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0005650520324707

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00063896179199219

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'messages'
 LIMIT 1 
 Execution Time:0.00067996978759766

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0091919898986816

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0097050666809082

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '89kj24euufa9ig7soagrk18mp9gi92i9'
AND `ip_address` = '::1' 
 Execution Time:0.00057697296142578

SELECT GET_LOCK('3425633b1bb6328646dab9961f17941e', 300) AS ci_session_lock 
 Execution Time:0.00038814544677734

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '89kj24euufa9ig7soagrk18mp9gi92i9'
AND `ip_address` = '::1' 
 Execution Time:0.00061607360839844

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00057315826416016

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'customers%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00044107437133789

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'customers!_%' ESCAPE '!' 
 Execution Time:0.0003349781036377

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00083398818969727

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'mailchimp_api_key'
 LIMIT 1 
 Execution Time:0.00040292739868164

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'mailchimp_list_id'
 LIMIT 1 
 Execution Time:0.00048685073852539

SHOW TABLES FROM `ospos` 
 Execution Time:0.0030288696289062

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00044989585876465

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00054192543029785

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.006321907043457

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00090289115905762

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00049495697021484

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00058794021606445

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00060510635375977

SELECT *
FROM `ospos_customers` AS `customers`
JOIN `ospos_people` ON `customers`.`person_id` = `ospos_people`.`person_id`
WHERE   (
`first_name` LIKE '%%' ESCAPE '!'
OR  `last_name` LIKE '%%' ESCAPE '!'
OR  `email` LIKE '%%' ESCAPE '!'
OR  `phone_number` LIKE '%%' ESCAPE '!'
OR  `account_number` LIKE '%%' ESCAPE '!'
OR  `company_name` LIKE '%%' ESCAPE '!'
OR  CONCAT(first_name, " ", last_name) LIKE '%%' ESCAPE '!'
 )
AND `deleted` = 0
 LIMIT 25 
 Execution Time:0.0012550354003906

SELECT COUNT(customers.person_id) as count
FROM `ospos_customers` AS `customers`
JOIN `ospos_people` ON `customers`.`person_id` = `ospos_people`.`person_id`
WHERE   (
`first_name` LIKE '%%' ESCAPE '!'
OR  `last_name` LIKE '%%' ESCAPE '!'
OR  `email` LIKE '%%' ESCAPE '!'
OR  `phone_number` LIKE '%%' ESCAPE '!'
OR  `account_number` LIKE '%%' ESCAPE '!'
OR  `company_name` LIKE '%%' ESCAPE '!'
OR  CONCAT(first_name, " ", last_name) LIKE '%%' ESCAPE '!'
 )
AND `deleted` = 0 
 Execution Time:0.000946044921875

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_temp (INDEX(sale_id)) ENGINE=MEMORY
			(
				SELECT
					sales.sale_id AS sale_id,
					AVG(sales_items.discount) AS avg_discount,
					SUM(sales_items.quantity_purchased) AS quantity
				FROM ospos_sales AS sales
				INNER JOIN ospos_sales_items AS sales_items
					ON sales_items.sale_id = sales.sale_id
				WHERE sales.customer_id = '3'
				GROUP BY sale_id
			) 
 Execution Time:0.00089502334594727

SELECT SUM(sales_payments.payment_amount - sales_payments.cash_refund) AS total, MIN(sales_payments.payment_amount - sales_payments.cash_refund) AS min, MAX(sales_payments.payment_amount - sales_payments.cash_refund) AS max, AVG(sales_payments.payment_amount - sales_payments.cash_refund) AS average, ROUND(AVG(sales_items_temp.avg_discount), 2) AS avg_discount, ROUND(SUM(sales_items_temp.quantity), 0) AS quantity
FROM `ospos_sales`
JOIN `ospos_sales_payments` AS `sales_payments` ON `ospos_sales`.`sale_id` = `sales_payments`.`sale_id`
JOIN `ospos_sales_items_temp` AS `sales_items_temp` ON `ospos_sales`.`sale_id` = `sales_items_temp`.`sale_id`
WHERE `ospos_sales`.`customer_id` = '3'
AND `ospos_sales`.`sale_status` = 0
GROUP BY `ospos_sales`.`customer_id` 
 Execution Time:0.00062704086303711

DROP TEMPORARY TABLE IF EXISTS ospos_sales_items_temp 
 Execution Time:0.00031781196594238

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_temp (INDEX(sale_id)) ENGINE=MEMORY
			(
				SELECT
					sales.sale_id AS sale_id,
					AVG(sales_items.discount) AS avg_discount,
					SUM(sales_items.quantity_purchased) AS quantity
				FROM ospos_sales AS sales
				INNER JOIN ospos_sales_items AS sales_items
					ON sales_items.sale_id = sales.sale_id
				WHERE sales.customer_id = '6'
				GROUP BY sale_id
			) 
 Execution Time:0.00067806243896484

SELECT SUM(sales_payments.payment_amount - sales_payments.cash_refund) AS total, MIN(sales_payments.payment_amount - sales_payments.cash_refund) AS min, MAX(sales_payments.payment_amount - sales_payments.cash_refund) AS max, AVG(sales_payments.payment_amount - sales_payments.cash_refund) AS average, ROUND(AVG(sales_items_temp.avg_discount), 2) AS avg_discount, ROUND(SUM(sales_items_temp.quantity), 0) AS quantity
FROM `ospos_sales`
JOIN `ospos_sales_payments` AS `sales_payments` ON `ospos_sales`.`sale_id` = `sales_payments`.`sale_id`
JOIN `ospos_sales_items_temp` AS `sales_items_temp` ON `ospos_sales`.`sale_id` = `sales_items_temp`.`sale_id`
WHERE `ospos_sales`.`customer_id` = '6'
AND `ospos_sales`.`sale_status` = 0
GROUP BY `ospos_sales`.`customer_id` 
 Execution Time:0.00065708160400391

DROP TEMPORARY TABLE IF EXISTS ospos_sales_items_temp 
 Execution Time:0.00034594535827637

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '89kj24euufa9ig7soagrk18mp9gi92i9'
AND `ip_address` = '::1' 
 Execution Time:0.00078511238098145

SELECT GET_LOCK('3425633b1bb6328646dab9961f17941e', 300) AS ci_session_lock 
 Execution Time:0.00092291831970215

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '89kj24euufa9ig7soagrk18mp9gi92i9'
AND `ip_address` = '::1' 
 Execution Time:0.0018389225006104

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0023188591003418

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'customers%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00081992149353027

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'customers!_%' ESCAPE '!' 
 Execution Time:0.00050091743469238

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00097012519836426

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'mailchimp_api_key'
 LIMIT 1 
 Execution Time:0.00045895576477051

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'mailchimp_list_id'
 LIMIT 1 
 Execution Time:0.00031590461730957

SHOW TABLES FROM `ospos` 
 Execution Time:0.0068509578704834

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0006411075592041

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00074005126953125

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0007939338684082

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00054216384887695

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00077486038208008

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00082015991210938

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00085997581481934

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:0.00073599815368652

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:0.0004279613494873

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.030236005783081

SHOW COLUMNS FROM `ospos_customers` 
 Execution Time:0.012331962585449

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00079202651977539

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00057387351989746

SELECT *
FROM `ospos_tax_codes`
WHERE `tax_code_id` = ''
AND `deleted` = 0 
 Execution Time:0.00050091743469238

SHOW COLUMNS FROM `ospos_tax_codes` 
 Execution Time:0.010897874832153

SELECT *
FROM `ospos_customers_packages`
WHERE `deleted` = 0 
 Execution Time:0.0017030239105225

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_temp (INDEX(sale_id)) ENGINE=MEMORY
			(
				SELECT
					sales.sale_id AS sale_id,
					AVG(sales_items.discount) AS avg_discount,
					SUM(sales_items.quantity_purchased) AS quantity
				FROM ospos_sales AS sales
				INNER JOIN ospos_sales_items AS sales_items
					ON sales_items.sale_id = sales.sale_id
				WHERE sales.customer_id = -1
				GROUP BY sale_id
			) 
 Execution Time:0.0010969638824463

SELECT SUM(sales_payments.payment_amount - sales_payments.cash_refund) AS total, MIN(sales_payments.payment_amount - sales_payments.cash_refund) AS min, MAX(sales_payments.payment_amount - sales_payments.cash_refund) AS max, AVG(sales_payments.payment_amount - sales_payments.cash_refund) AS average, ROUND(AVG(sales_items_temp.avg_discount), 2) AS avg_discount, ROUND(SUM(sales_items_temp.quantity), 0) AS quantity
FROM `ospos_sales`
JOIN `ospos_sales_payments` AS `sales_payments` ON `ospos_sales`.`sale_id` = `sales_payments`.`sale_id`
JOIN `ospos_sales_items_temp` AS `sales_items_temp` ON `ospos_sales`.`sale_id` = `sales_items_temp`.`sale_id`
WHERE `ospos_sales`.`customer_id` = -1
AND `ospos_sales`.`sale_status` = 0
GROUP BY `ospos_sales`.`customer_id` 
 Execution Time:0.000823974609375

DROP TEMPORARY TABLE IF EXISTS ospos_sales_items_temp 
 Execution Time:0.00044894218444824

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00071907043457031

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '89kj24euufa9ig7soagrk18mp9gi92i9'
AND `ip_address` = '::1' 
 Execution Time:0.0007331371307373

SELECT GET_LOCK('3425633b1bb6328646dab9961f17941e', 300) AS ci_session_lock 
 Execution Time:0.00051999092102051

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '89kj24euufa9ig7soagrk18mp9gi92i9'
AND `ip_address` = '::1' 
 Execution Time:0.00068211555480957

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00059700012207031

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00047612190246582

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0010199546813965

SHOW TABLES FROM `ospos` 
 Execution Time:0.0055079460144043

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0010190010070801

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00076484680175781

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00056600570678711

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00087809562683105

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00066900253295898

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00066590309143066

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00093889236450195

SELECT *
FROM `ospos_dinner_tables`
WHERE `status` = 0
OR `dinner_table_id` IS NULL
AND `deleted` = 0 
 Execution Time:0.0009310245513916

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.00084996223449707

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:0.00065398216247559

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:0.0005030632019043

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.034717082977295

SHOW COLUMNS FROM `ospos_customers` 
 Execution Time:0.011224031448364

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00056600570678711

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'items'
 LIMIT 1 
 Execution Time:0.00050806999206543

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00072598457336426

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'sales_change_price'
 LIMIT 1 
 Execution Time:0.00041007995605469

SELECT COUNT(*) AS `numrows`
FROM `ospos_sales`
WHERE `invoice_number` IS NOT NULL 
 Execution Time:0.00049304962158203

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00097894668579102

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '89kj24euufa9ig7soagrk18mp9gi92i9'
AND `ip_address` = '::1' 
 Execution Time:0.00076603889465332

SELECT GET_LOCK('3425633b1bb6328646dab9961f17941e', 300) AS ci_session_lock 
 Execution Time:0.00069093704223633

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '89kj24euufa9ig7soagrk18mp9gi92i9'
AND `ip_address` = '::1' 
 Execution Time:0.0011019706726074

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00075197219848633

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0014050006866455

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0016918182373047

SHOW TABLES FROM `ospos` 
 Execution Time:0.0050251483917236

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00059914588928223

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00065994262695312

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00088214874267578

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00073790550231934

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0012199878692627

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0006401538848877

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.001025915145874

SELECT `item_id`, `name`, `pack_name`, `name`
FROM `ospos_items`
WHERE `deleted` = 0
AND `item_type` IN(0, 2)
AND  `name` LIKE '%1%' ESCAPE '!'
ORDER BY `name` ASC 
 Execution Time:0.0029458999633789

SELECT `item_id`, `item_number`, `pack_name`, `name`
FROM `ospos_items`
WHERE `deleted` = 0
AND `item_type` IN(0, 2)
AND  `item_number` LIKE '%1%' ESCAPE '!'
ORDER BY `item_number` ASC 
 Execution Time:0.00072407722473145

SELECT *
FROM `ospos_item_kits`
WHERE `name` LIKE '%1%' ESCAPE '!'
OR  `item_kit_number` LIKE '%1%' ESCAPE '!'
ORDER BY `name` ASC 
 Execution Time:0.0020880699157715

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '89kj24euufa9ig7soagrk18mp9gi92i9'
AND `ip_address` = '::1' 
 Execution Time:0.00062704086303711

SELECT GET_LOCK('3425633b1bb6328646dab9961f17941e', 300) AS ci_session_lock 
 Execution Time:0.00031089782714844

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '89kj24euufa9ig7soagrk18mp9gi92i9'
AND `ip_address` = '::1' 
 Execution Time:0.00042414665222168

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00075507164001465

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00080180168151855

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0038290023803711

SHOW TABLES FROM `ospos` 
 Execution Time:0.0060379505157471

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00039911270141602

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00047397613525391

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00084877014160156

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00062417984008789

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00069403648376465

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0011260509490967

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00061511993408203

SELECT *
FROM `ospos_item_kits`
WHERE `item_kit_number` = '1' 
 Execution Time:0.0023510456085205

SELECT *
FROM `ospos_items`
WHERE   (
`ospos_items`.`item_number` = '1'
OR `ospos_items`.`item_id` = 1
 )
AND `ospos_items`.`deleted` = 0
 LIMIT 1 
 Execution Time:0.0019099712371826

SELECT GROUP_CONCAT(attribute_value SEPARATOR ', ') AS attribute_values, GROUP_CONCAT(DATE_FORMAT(attribute_date, '%m/%d/%Y') SEPARATOR ', ') AS attribute_dtvalues
FROM `ospos_attribute_links`
JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
JOIN `ospos_attribute_definitions` ON `ospos_attribute_definitions`.`definition_id` = `ospos_attribute_links`.`definition_id`
WHERE `definition_type` <> 'GROUP'
AND `deleted` = 0
AND `item_id` = 1
AND `sale_id` IS NULL
AND `receiving_id` IS NULL
AND definition_flags &  2 
 Execution Time:0.0046989917755127

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00049710273742676

SELECT *
FROM `ospos_item_quantities`
WHERE `item_id` = '1'
AND `location_id` = '1' 
 Execution Time:0.0036530494689941

SELECT *
FROM `ospos_items`
WHERE   (
`ospos_items`.`item_number` = '1'
OR `ospos_items`.`item_id` = 1
 )
 LIMIT 1 
 Execution Time:0.0053789615631104

SELECT *
FROM `ospos_item_quantities`
WHERE `item_id` = '1'
AND `location_id` = '1' 
 Execution Time:0.00036382675170898

SELECT *
FROM `ospos_dinner_tables`
WHERE `status` = 0
OR `dinner_table_id` IS NULL
AND `deleted` = 0 
 Execution Time:0.00036287307739258

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.00054502487182617

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:0.00077390670776367

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:0.00047588348388672

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.03137993812561

SHOW COLUMNS FROM `ospos_customers` 
 Execution Time:0.015535831451416

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '1' 
 Execution Time:0.0023560523986816

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00063180923461914

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'items'
 LIMIT 1 
 Execution Time:0.00070881843566895

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0027918815612793

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'sales_change_price'
 LIMIT 1 
 Execution Time:0.0013689994812012

SELECT COUNT(*) AS `numrows`
FROM `ospos_sales`
WHERE `invoice_number` IS NOT NULL 
 Execution Time:0.00068902969360352

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00047397613525391

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '89kj24euufa9ig7soagrk18mp9gi92i9'
AND `ip_address` = '::1' 
 Execution Time:0.0029869079589844

SELECT GET_LOCK('3425633b1bb6328646dab9961f17941e', 300) AS ci_session_lock 
 Execution Time:0.000640869140625

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '89kj24euufa9ig7soagrk18mp9gi92i9'
AND `ip_address` = '::1' 
 Execution Time:0.0042948722839355

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010011196136475

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'customers%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00047206878662109

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'customers!_%' ESCAPE '!' 
 Execution Time:0.00032210350036621

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00095319747924805

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'mailchimp_api_key'
 LIMIT 1 
 Execution Time:0.00088620185852051

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'mailchimp_list_id'
 LIMIT 1 
 Execution Time:0.00098705291748047

SHOW TABLES FROM `ospos` 
 Execution Time:0.0031650066375732

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00045394897460938

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00059604644775391

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00055098533630371

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00060915946960449

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00057506561279297

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00042986869812012

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00053882598876953

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_customers`.`person_id` = `ospos_people`.`person_id`
WHERE   (
`first_name` LIKE '%b%' ESCAPE '!'
OR  `last_name` LIKE '%b%' ESCAPE '!'
OR  CONCAT(first_name, " ", last_name) LIKE '%b%' ESCAPE '!'
OR  `email` LIKE '%b%' ESCAPE '!'
OR  `phone_number` LIKE '%b%' ESCAPE '!'
OR  `company_name` LIKE '%b%' ESCAPE '!'
 )
AND `deleted` = 0
ORDER BY `last_name` ASC 
 Execution Time:0.024598121643066

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '89kj24euufa9ig7soagrk18mp9gi92i9'
AND `ip_address` = '::1' 
 Execution Time:0.0023300647735596

SELECT GET_LOCK('3425633b1bb6328646dab9961f17941e', 300) AS ci_session_lock 
 Execution Time:0.00038719177246094

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '89kj24euufa9ig7soagrk18mp9gi92i9'
AND `ip_address` = '::1' 
 Execution Time:0.00070095062255859

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00069904327392578

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0006561279296875

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0011250972747803

SHOW TABLES FROM `ospos` 
 Execution Time:0.0091440677642822

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0010688304901123

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0048089027404785

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00063896179199219

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00058889389038086

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00049996376037598

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00055098533630371

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00056099891662598

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.0006248950958252

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.0008549690246582

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.00059199333190918

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.00069308280944824

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.0006110668182373

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_temp (INDEX(sale_id)) ENGINE=MEMORY
			(
				SELECT
					sales.sale_id AS sale_id,
					AVG(sales_items.discount) AS avg_discount,
					SUM(sales_items.quantity_purchased) AS quantity
				FROM ospos_sales AS sales
				INNER JOIN ospos_sales_items AS sales_items
					ON sales_items.sale_id = sales.sale_id
				WHERE sales.customer_id = '6'
				GROUP BY sale_id
			) 
 Execution Time:0.00064992904663086

SELECT SUM(sales_payments.payment_amount - sales_payments.cash_refund) AS total, MIN(sales_payments.payment_amount - sales_payments.cash_refund) AS min, MAX(sales_payments.payment_amount - sales_payments.cash_refund) AS max, AVG(sales_payments.payment_amount - sales_payments.cash_refund) AS average, ROUND(AVG(sales_items_temp.avg_discount), 2) AS avg_discount, ROUND(SUM(sales_items_temp.quantity), 0) AS quantity
FROM `ospos_sales`
JOIN `ospos_sales_payments` AS `sales_payments` ON `ospos_sales`.`sale_id` = `sales_payments`.`sale_id`
JOIN `ospos_sales_items_temp` AS `sales_items_temp` ON `ospos_sales`.`sale_id` = `sales_items_temp`.`sale_id`
WHERE `ospos_sales`.`customer_id` = '6'
AND `ospos_sales`.`sale_status` = 0
GROUP BY `ospos_sales`.`customer_id` 
 Execution Time:0.0011429786682129

DROP TEMPORARY TABLE IF EXISTS ospos_sales_items_temp 
 Execution Time:0.00065898895263672

SELECT *
FROM `ospos_dinner_tables`
WHERE `status` = 0
OR `dinner_table_id` IS NULL
AND `deleted` = 0 
 Execution Time:0.00041699409484863

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.00056886672973633

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.00045609474182129

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '1' 
 Execution Time:0.0003049373626709

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00039291381835938

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'items'
 LIMIT 1 
 Execution Time:0.00029802322387695

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00045108795166016

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'sales_change_price'
 LIMIT 1 
 Execution Time:0.00039196014404297

SELECT COUNT(*) AS `numrows`
FROM `ospos_sales`
WHERE `invoice_number` IS NOT NULL 
 Execution Time:0.00056600570678711

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00058388710021973

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '89kj24euufa9ig7soagrk18mp9gi92i9'
AND `ip_address` = '::1' 
 Execution Time:0.00062894821166992

SELECT GET_LOCK('3425633b1bb6328646dab9961f17941e', 300) AS ci_session_lock 
 Execution Time:0.0016090869903564

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '89kj24euufa9ig7soagrk18mp9gi92i9'
AND `ip_address` = '::1' 
 Execution Time:0.0016250610351562

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0012588500976562

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0011720657348633

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00093483924865723

SHOW TABLES FROM `ospos` 
 Execution Time:0.0041549205780029

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00044488906860352

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0005500316619873

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010287761688232

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00057721138000488

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00043392181396484

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00046610832214355

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00070905685424805

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.00061297416687012

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '1' 
 Execution Time:0.00036287307739258

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.00047421455383301

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '1' 
 Execution Time:0.00039410591125488

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.00046491622924805

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.00045108795166016

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_temp (INDEX(sale_id)) ENGINE=MEMORY
			(
				SELECT
					sales.sale_id AS sale_id,
					AVG(sales_items.discount) AS avg_discount,
					SUM(sales_items.quantity_purchased) AS quantity
				FROM ospos_sales AS sales
				INNER JOIN ospos_sales_items AS sales_items
					ON sales_items.sale_id = sales.sale_id
				WHERE sales.customer_id = '6'
				GROUP BY sale_id
			) 
 Execution Time:0.0032010078430176

SELECT SUM(sales_payments.payment_amount - sales_payments.cash_refund) AS total, MIN(sales_payments.payment_amount - sales_payments.cash_refund) AS min, MAX(sales_payments.payment_amount - sales_payments.cash_refund) AS max, AVG(sales_payments.payment_amount - sales_payments.cash_refund) AS average, ROUND(AVG(sales_items_temp.avg_discount), 2) AS avg_discount, ROUND(SUM(sales_items_temp.quantity), 0) AS quantity
FROM `ospos_sales`
JOIN `ospos_sales_payments` AS `sales_payments` ON `ospos_sales`.`sale_id` = `sales_payments`.`sale_id`
JOIN `ospos_sales_items_temp` AS `sales_items_temp` ON `ospos_sales`.`sale_id` = `sales_items_temp`.`sale_id`
WHERE `ospos_sales`.`customer_id` = '6'
AND `ospos_sales`.`sale_status` = 0
GROUP BY `ospos_sales`.`customer_id` 
 Execution Time:0.00077295303344727

DROP TEMPORARY TABLE IF EXISTS ospos_sales_items_temp 
 Execution Time:0.00032997131347656

SELECT *
FROM `ospos_dinner_tables`
WHERE `status` = 0
OR `dinner_table_id` IS NULL
AND `deleted` = 0 
 Execution Time:0.00049591064453125

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.00084209442138672

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.00065803527832031

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '1' 
 Execution Time:0.0003809928894043

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00056099891662598

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'items'
 LIMIT 1 
 Execution Time:0.00036907196044922

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00037407875061035

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'sales_change_price'
 LIMIT 1 
 Execution Time:0.00030398368835449

SELECT COUNT(*) AS `numrows`
FROM `ospos_sales`
WHERE `invoice_number` IS NOT NULL 
 Execution Time:0.00041389465332031

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.0011730194091797

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '89kj24euufa9ig7soagrk18mp9gi92i9'
AND `ip_address` = '::1' 
 Execution Time:0.00078105926513672

SELECT GET_LOCK('3425633b1bb6328646dab9961f17941e', 300) AS ci_session_lock 
 Execution Time:0.00046706199645996

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '89kj24euufa9ig7soagrk18mp9gi92i9'
AND `ip_address` = '::1' 
 Execution Time:0.00056695938110352

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00067591667175293

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00043392181396484

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0049281120300293

SHOW TABLES FROM `ospos` 
 Execution Time:0.0029828548431396

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.002194881439209

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0012919902801514

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.022750854492188

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0014870166778564

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0098471641540527

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.027972936630249

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0073897838592529

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.0007328987121582

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00047898292541504

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00058507919311523

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.00067901611328125

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.00047111511230469

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.00050187110900879

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '1' 
 Execution Time:0.00034904479980469

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.00043702125549316

INSERT INTO `ospos_sales` (`sale_time`, `customer_id`, `employee_id`, `comment`, `sale_status`, `invoice_number`, `quote_number`, `work_order_number`, `dinner_table_id`, `sale_type`) VALUES ('2023-10-27 10:00:11', '6', '1', '', 0, NULL, NULL, NULL, NULL, 0) 
 Execution Time:0.0031170845031738

INSERT INTO `ospos_sales_payments` (`sale_id`, `payment_type`, `payment_amount`, `cash_refund`, `cash_adjustment`, `employee_id`) VALUES (18, 'Cash', 400, 0, 0, '1') 
 Execution Time:0.0027878284454346

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.0026259422302246

SELECT `ospos_items`.*, GROUP_CONCAT(attribute_value SEPARATOR '|') AS attribute_values, GROUP_CONCAT(attribute_decimal SEPARATOR '|') AS attribute_dvalues, GROUP_CONCAT(attribute_date SEPARATOR '|') AS attribute_dtvalues
FROM `ospos_items`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_items`.`item_id`
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_links`.`attribute_id` = `ospos_attribute_values`.`attribute_id`
WHERE `ospos_items`.`item_id` = '1'
GROUP BY `ospos_items`.`item_id` 
 Execution Time:0.0009300708770752

INSERT INTO `ospos_sales_items` (`sale_id`, `item_id`, `line`, `description`, `serialnumber`, `quantity_purchased`, `discount`, `discount_type`, `item_cost_price`, `item_unit_price`, `item_location`, `print_option`) VALUES (18, '1', 1, '', '', 1, '0.00', '0', '310.00', '400.00', '1', 0) 
 Execution Time:0.0028450489044189

SELECT *
FROM `ospos_item_quantities`
WHERE `item_id` = '1'
AND `location_id` = '1' 
 Execution Time:0.00050497055053711

SELECT *
FROM `ospos_item_quantities`
WHERE `item_id` = '1'
AND `location_id` = '1' 
 Execution Time:0.00035500526428223

UPDATE `ospos_item_quantities` SET `quantity` = 4008, `item_id` = '1', `location_id` = '1'
WHERE `item_id` = '1'
AND `location_id` = '1' 
 Execution Time:0.001133918762207

INSERT INTO `ospos_inventory` (`trans_date`, `trans_items`, `trans_user`, `trans_location`, `trans_comment`, `trans_inventory`) VALUES ('2023-10-27 10:00:11', '1', '1', '1', 'POS 18', -1) 
 Execution Time:0.0027501583099365

INSERT INTO ospos_attribute_links (item_id, definition_id, attribute_id, sale_id)
			SELECT '1', definition_id, attribute_id, 18
			FROM ospos_attribute_links
			WHERE item_id = '1' AND sale_id IS NULL AND receiving_id IS NULL 
 Execution Time:0.0083191394805908

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00058889389038086

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '89kj24euufa9ig7soagrk18mp9gi92i9'
AND `ip_address` = '::1' 
 Execution Time:0.0017549991607666

SELECT GET_LOCK('3425633b1bb6328646dab9961f17941e', 300) AS ci_session_lock 
 Execution Time:0.00034403800964355

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '89kj24euufa9ig7soagrk18mp9gi92i9'
AND `ip_address` = '::1' 
 Execution Time:0.0004119873046875

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0013561248779297

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.001054048538208

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00096011161804199

SHOW TABLES FROM `ospos` 
 Execution Time:0.0028789043426514

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0004279613494873

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0006110668182373

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00071406364440918

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00062394142150879

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00056099891662598

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00095796585083008

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099802017211914

SELECT *
FROM `ospos_dinner_tables`
WHERE `status` = 0
OR `dinner_table_id` IS NULL
AND `deleted` = 0 
 Execution Time:0.00060200691223145

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.00061583518981934

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:0.00040483474731445

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:0.0002739429473877

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.027662038803101

SHOW COLUMNS FROM `ospos_customers` 
 Execution Time:0.013978004455566

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00075101852416992

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'items'
 LIMIT 1 
 Execution Time:0.00053882598876953

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00069189071655273

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'sales_change_price'
 LIMIT 1 
 Execution Time:0.00049304962158203

SELECT COUNT(*) AS `numrows`
FROM `ospos_sales`
WHERE `invoice_number` IS NOT NULL 
 Execution Time:0.00049710273742676

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00052690505981445

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '89kj24euufa9ig7soagrk18mp9gi92i9'
AND `ip_address` = '::1' 
 Execution Time:0.00066399574279785

SELECT GET_LOCK('3425633b1bb6328646dab9961f17941e', 300) AS ci_session_lock 
 Execution Time:0.00039505958557129

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '89kj24euufa9ig7soagrk18mp9gi92i9'
AND `ip_address` = '::1' 
 Execution Time:0.00057721138000488

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00089788436889648

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'customers%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0018141269683838

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'customers!_%' ESCAPE '!' 
 Execution Time:0.00050592422485352

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0010190010070801

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'mailchimp_api_key'
 LIMIT 1 
 Execution Time:0.00049400329589844

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'mailchimp_list_id'
 LIMIT 1 
 Execution Time:0.00036191940307617

SHOW TABLES FROM `ospos` 
 Execution Time:0.0027937889099121

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00040221214294434

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00048279762268066

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00068998336791992

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00045490264892578

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00036120414733887

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00037503242492676

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00054597854614258

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'messages'
 LIMIT 1 
 Execution Time:0.00046610832214355

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010139942169189

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00073790550231934

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '89kj24euufa9ig7soagrk18mp9gi92i9'
AND `ip_address` = '::1' 
 Execution Time:0.00059294700622559

SELECT GET_LOCK('3425633b1bb6328646dab9961f17941e', 300) AS ci_session_lock 
 Execution Time:0.00033807754516602

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '89kj24euufa9ig7soagrk18mp9gi92i9'
AND `ip_address` = '::1' 
 Execution Time:0.0004279613494873

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00060200691223145

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'customers%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00043988227844238

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'customers!_%' ESCAPE '!' 
 Execution Time:0.00031495094299316

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00093293190002441

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'mailchimp_api_key'
 LIMIT 1 
 Execution Time:0.00061392784118652

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'mailchimp_list_id'
 LIMIT 1 
 Execution Time:0.00055789947509766

SHOW TABLES FROM `ospos` 
 Execution Time:0.0028579235076904

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00040006637573242

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00046420097351074

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00056695938110352

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00043296813964844

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00037193298339844

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00033307075500488

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00069713592529297

SELECT *
FROM `ospos_customers` AS `customers`
JOIN `ospos_people` ON `customers`.`person_id` = `ospos_people`.`person_id`
WHERE   (
`first_name` LIKE '%%' ESCAPE '!'
OR  `last_name` LIKE '%%' ESCAPE '!'
OR  `email` LIKE '%%' ESCAPE '!'
OR  `phone_number` LIKE '%%' ESCAPE '!'
OR  `account_number` LIKE '%%' ESCAPE '!'
OR  `company_name` LIKE '%%' ESCAPE '!'
OR  CONCAT(first_name, " ", last_name) LIKE '%%' ESCAPE '!'
 )
AND `deleted` = 0
 LIMIT 25 
 Execution Time:0.0010638236999512

SELECT COUNT(customers.person_id) as count
FROM `ospos_customers` AS `customers`
JOIN `ospos_people` ON `customers`.`person_id` = `ospos_people`.`person_id`
WHERE   (
`first_name` LIKE '%%' ESCAPE '!'
OR  `last_name` LIKE '%%' ESCAPE '!'
OR  `email` LIKE '%%' ESCAPE '!'
OR  `phone_number` LIKE '%%' ESCAPE '!'
OR  `account_number` LIKE '%%' ESCAPE '!'
OR  `company_name` LIKE '%%' ESCAPE '!'
OR  CONCAT(first_name, " ", last_name) LIKE '%%' ESCAPE '!'
 )
AND `deleted` = 0 
 Execution Time:0.00066399574279785

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_temp (INDEX(sale_id)) ENGINE=MEMORY
			(
				SELECT
					sales.sale_id AS sale_id,
					AVG(sales_items.discount) AS avg_discount,
					SUM(sales_items.quantity_purchased) AS quantity
				FROM ospos_sales AS sales
				INNER JOIN ospos_sales_items AS sales_items
					ON sales_items.sale_id = sales.sale_id
				WHERE sales.customer_id = '3'
				GROUP BY sale_id
			) 
 Execution Time:0.00067996978759766

SELECT SUM(sales_payments.payment_amount - sales_payments.cash_refund) AS total, MIN(sales_payments.payment_amount - sales_payments.cash_refund) AS min, MAX(sales_payments.payment_amount - sales_payments.cash_refund) AS max, AVG(sales_payments.payment_amount - sales_payments.cash_refund) AS average, ROUND(AVG(sales_items_temp.avg_discount), 2) AS avg_discount, ROUND(SUM(sales_items_temp.quantity), 0) AS quantity
FROM `ospos_sales`
JOIN `ospos_sales_payments` AS `sales_payments` ON `ospos_sales`.`sale_id` = `sales_payments`.`sale_id`
JOIN `ospos_sales_items_temp` AS `sales_items_temp` ON `ospos_sales`.`sale_id` = `sales_items_temp`.`sale_id`
WHERE `ospos_sales`.`customer_id` = '3'
AND `ospos_sales`.`sale_status` = 0
GROUP BY `ospos_sales`.`customer_id` 
 Execution Time:0.0006260871887207

DROP TEMPORARY TABLE IF EXISTS ospos_sales_items_temp 
 Execution Time:0.00034213066101074

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_temp (INDEX(sale_id)) ENGINE=MEMORY
			(
				SELECT
					sales.sale_id AS sale_id,
					AVG(sales_items.discount) AS avg_discount,
					SUM(sales_items.quantity_purchased) AS quantity
				FROM ospos_sales AS sales
				INNER JOIN ospos_sales_items AS sales_items
					ON sales_items.sale_id = sales.sale_id
				WHERE sales.customer_id = '6'
				GROUP BY sale_id
			) 
 Execution Time:0.0040068626403809

SELECT SUM(sales_payments.payment_amount - sales_payments.cash_refund) AS total, MIN(sales_payments.payment_amount - sales_payments.cash_refund) AS min, MAX(sales_payments.payment_amount - sales_payments.cash_refund) AS max, AVG(sales_payments.payment_amount - sales_payments.cash_refund) AS average, ROUND(AVG(sales_items_temp.avg_discount), 2) AS avg_discount, ROUND(SUM(sales_items_temp.quantity), 0) AS quantity
FROM `ospos_sales`
JOIN `ospos_sales_payments` AS `sales_payments` ON `ospos_sales`.`sale_id` = `sales_payments`.`sale_id`
JOIN `ospos_sales_items_temp` AS `sales_items_temp` ON `ospos_sales`.`sale_id` = `sales_items_temp`.`sale_id`
WHERE `ospos_sales`.`customer_id` = '6'
AND `ospos_sales`.`sale_status` = 0
GROUP BY `ospos_sales`.`customer_id` 
 Execution Time:0.0021848678588867

DROP TEMPORARY TABLE IF EXISTS ospos_sales_items_temp 
 Execution Time:0.00072884559631348

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '89kj24euufa9ig7soagrk18mp9gi92i9'
AND `ip_address` = '::1' 
 Execution Time:0.00062108039855957

SELECT GET_LOCK('3425633b1bb6328646dab9961f17941e', 300) AS ci_session_lock 
 Execution Time:0.00092482566833496

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '89kj24euufa9ig7soagrk18mp9gi92i9'
AND `ip_address` = '::1' 
 Execution Time:0.00084400177001953

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00055313110351562

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0004270076751709

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'office!_%' ESCAPE '!' 
 Execution Time:0.00031185150146484

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00088691711425781

SHOW TABLES FROM `ospos` 
 Execution Time:0.0029420852661133

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00041413307189941

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00067496299743652

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00082802772521973

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00056910514831543

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00036311149597168

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00033903121948242

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00053906440734863

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '89kj24euufa9ig7soagrk18mp9gi92i9'
AND `ip_address` = '::1' 
 Execution Time:0.00059700012207031

SELECT GET_LOCK('3425633b1bb6328646dab9961f17941e', 300) AS ci_session_lock 
 Execution Time:0.00042104721069336

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '89kj24euufa9ig7soagrk18mp9gi92i9'
AND `ip_address` = '::1' 
 Execution Time:0.00044107437133789

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0009770393371582

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00048995018005371

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00032496452331543

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0012199878692627

SHOW TABLES FROM `ospos` 
 Execution Time:0.010066986083984

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0004889965057373

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00064611434936523

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00075912475585938

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00056099891662598

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.000701904296875

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0054800510406494

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00058484077453613

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010519027709961

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00052309036254883

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '89kj24euufa9ig7soagrk18mp9gi92i9'
AND `ip_address` = '::1' 
 Execution Time:0.00057196617126465

SELECT GET_LOCK('3425633b1bb6328646dab9961f17941e', 300) AS ci_session_lock 
 Execution Time:0.00037693977355957

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '89kj24euufa9ig7soagrk18mp9gi92i9'
AND `ip_address` = '::1' 
 Execution Time:0.00056695938110352

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00057578086853027

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00041818618774414

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00061583518981934

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0011110305786133

SHOW TABLES FROM `ospos` 
 Execution Time:0.0030879974365234

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00079512596130371

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00068998336791992

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00086617469787598

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.001323938369751

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010199546813965

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00057578086853027

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.004335880279541

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0013148784637451

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00088787078857422

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '89kj24euufa9ig7soagrk18mp9gi92i9'
AND `ip_address` = '::1' 
 Execution Time:0.00073719024658203

SELECT GET_LOCK('3425633b1bb6328646dab9961f17941e', 300) AS ci_session_lock 
 Execution Time:0.00033903121948242

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '89kj24euufa9ig7soagrk18mp9gi92i9'
AND `ip_address` = '::1' 
 Execution Time:0.0004429817199707

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00055503845214844

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00042414665222168

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00038981437683105

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0015759468078613

SHOW TABLES FROM `ospos` 
 Execution Time:0.002593994140625

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00083303451538086

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00086116790771484

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0007178783416748

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00057506561279297

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00064206123352051

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00059080123901367

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00063300132751465

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00062203407287598

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00051307678222656

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '89kj24euufa9ig7soagrk18mp9gi92i9'
AND `ip_address` = '::1' 
 Execution Time:0.00078296661376953

SELECT GET_LOCK('3425633b1bb6328646dab9961f17941e', 300) AS ci_session_lock 
 Execution Time:0.00030398368835449

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '89kj24euufa9ig7soagrk18mp9gi92i9'
AND `ip_address` = '::1' 
 Execution Time:0.0004119873046875

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00062799453735352

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00053501129150391

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00032615661621094

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00078415870666504

SHOW TABLES FROM `ospos` 
 Execution Time:0.0047049522399902

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.000885009765625

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00088191032409668

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00055694580078125

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00087904930114746

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0005650520324707

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0005040168762207

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00053691864013672

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.001939058303833

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00078511238098145

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '89kj24euufa9ig7soagrk18mp9gi92i9'
AND `ip_address` = '::1' 
 Execution Time:0.0019910335540771

SELECT GET_LOCK('3425633b1bb6328646dab9961f17941e', 300) AS ci_session_lock 
 Execution Time:0.00040602684020996

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '89kj24euufa9ig7soagrk18mp9gi92i9'
AND `ip_address` = '::1' 
 Execution Time:0.00041890144348145

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0031700134277344

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0015380382537842

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.0011510848999023

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0008699893951416

SHOW TABLES FROM `ospos` 
 Execution Time:0.0038890838623047

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00040698051452637

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00048112869262695

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0019831657409668

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00081896781921387

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00063896179199219

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00053215026855469

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00059604644775391

SELECT *
FROM `ospos_item_rates`
WHERE `rate_id` = -1
AND `deleted` = 0 
 Execution Time:0.0030720233917236

SHOW COLUMNS FROM `ospos_item_rates` 
 Execution Time:0.040721893310547

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '89kj24euufa9ig7soagrk18mp9gi92i9'
AND `ip_address` = '::1' 
 Execution Time:0.0006868839263916

SELECT GET_LOCK('3425633b1bb6328646dab9961f17941e', 300) AS ci_session_lock 
 Execution Time:0.00031018257141113

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '89kj24euufa9ig7soagrk18mp9gi92i9'
AND `ip_address` = '::1' 
 Execution Time:0.00043296813964844

UPDATE `ospos_sessions` SET `timestamp` = 1698415504, `data` = '__ci_last_regenerate|i:1698415504;person_id|s:1:\"1\";menu_group|s:6:\"office\";allow_temp_items|i:1;sale_id|i:-1;sales_location|s:1:\"1\";cash_rounding|i:0;cash_mode|i:0;sales_cart|a:0:{}sales_customer|i:-1;sales_mode|s:4:\"sale\";sales_payments|a:0:{}'
WHERE `id` = '89kj24euufa9ig7soagrk18mp9gi92i9'
AND `ip_address` = '::1' 
 Execution Time:0.0046718120574951

SELECT RELEASE_LOCK('3425633b1bb6328646dab9961f17941e') AS ci_session_lock 
 Execution Time:0.00024509429931641

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '89kj24euufa9ig7soagrk18mp9gi92i9'
AND `ip_address` = '::1' 
 Execution Time:0.00056099891662598

SELECT GET_LOCK('01ff9e5cb7eae6231a087c34af6664a7', 300) AS ci_session_lock 
 Execution Time:0.00024604797363281

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'o61khspmmqsa47acobdqv6ltn9pcfg3m'
AND `ip_address` = '::1' 
 Execution Time:0.00035881996154785

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00062084197998047

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00047993659973145

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.0003049373626709

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0009310245513916

SHOW TABLES FROM `ospos` 
 Execution Time:0.0048229694366455

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00043416023254395

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00049209594726562

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.015846014022827

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.013927936553955

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0089468955993652

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.030683040618896

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.031300067901611

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.011929035186768

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0021791458129883

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'o61khspmmqsa47acobdqv6ltn9pcfg3m'
AND `ip_address` = '::1' 
 Execution Time:0.00052380561828613

SELECT GET_LOCK('01ff9e5cb7eae6231a087c34af6664a7', 300) AS ci_session_lock 
 Execution Time:0.00035405158996582

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'o61khspmmqsa47acobdqv6ltn9pcfg3m'
AND `ip_address` = '::1' 
 Execution Time:0.0004889965057373

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00055193901062012

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00044989585876465

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00028896331787109

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00067281723022461

SHOW TABLES FROM `ospos` 
 Execution Time:0.003960132598877

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0004730224609375

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00049805641174316

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0005500316619873

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0005040168762207

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00047016143798828

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0014560222625732

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0037190914154053

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'o61khspmmqsa47acobdqv6ltn9pcfg3m'
AND `ip_address` = '::1' 
 Execution Time:0.00055503845214844

SELECT GET_LOCK('01ff9e5cb7eae6231a087c34af6664a7', 300) AS ci_session_lock 
 Execution Time:0.00034689903259277

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'o61khspmmqsa47acobdqv6ltn9pcfg3m'
AND `ip_address` = '::1' 
 Execution Time:0.00051712989807129

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00063109397888184

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00045084953308105

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00033712387084961

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0013139247894287

SHOW TABLES FROM `ospos` 
 Execution Time:0.002669095993042

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00060701370239258

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0005190372467041

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00057601928710938

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00083613395690918

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0006861686706543

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00055694580078125

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00064492225646973

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00064897537231445

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00049614906311035

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'o61khspmmqsa47acobdqv6ltn9pcfg3m'
AND `ip_address` = '::1' 
 Execution Time:0.00059199333190918

SELECT GET_LOCK('01ff9e5cb7eae6231a087c34af6664a7', 300) AS ci_session_lock 
 Execution Time:0.00033998489379883

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'o61khspmmqsa47acobdqv6ltn9pcfg3m'
AND `ip_address` = '::1' 
 Execution Time:0.0004270076751709

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0020701885223389

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0005640983581543

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.0005638599395752

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0008552074432373

SHOW TABLES FROM `ospos` 
 Execution Time:0.0030789375305176

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00048112869262695

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0005040168762207

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0012328624725342

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0006558895111084

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00080204010009766

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00067782402038574

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00054788589477539

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00063490867614746

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.000579833984375

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'o61khspmmqsa47acobdqv6ltn9pcfg3m'
AND `ip_address` = '::1' 
 Execution Time:0.001176118850708

SELECT GET_LOCK('01ff9e5cb7eae6231a087c34af6664a7', 300) AS ci_session_lock 
 Execution Time:0.00034618377685547

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'o61khspmmqsa47acobdqv6ltn9pcfg3m'
AND `ip_address` = '::1' 
 Execution Time:0.00046610832214355

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00056004524230957

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00039386749267578

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00032496452331543

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0009000301361084

SHOW TABLES FROM `ospos` 
 Execution Time:0.0035901069641113

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00047516822814941

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00043797492980957

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00067281723022461

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00071501731872559

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00051188468933105

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00039505958557129

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00062918663024902

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00066208839416504

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0015242099761963

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'o61khspmmqsa47acobdqv6ltn9pcfg3m'
AND `ip_address` = '::1' 
 Execution Time:0.00062680244445801

SELECT GET_LOCK('01ff9e5cb7eae6231a087c34af6664a7', 300) AS ci_session_lock 
 Execution Time:0.00034904479980469

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'o61khspmmqsa47acobdqv6ltn9pcfg3m'
AND `ip_address` = '::1' 
 Execution Time:0.0005040168762207

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00079703330993652

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00048184394836426

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.0005340576171875

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.022459983825684

SHOW TABLES FROM `ospos` 
 Execution Time:0.011173963546753

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0004429817199707

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00058293342590332

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00055623054504395

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0004119873046875

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00037813186645508

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00034284591674805

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00053596496582031

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00056099891662598

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00040793418884277

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'o61khspmmqsa47acobdqv6ltn9pcfg3m'
AND `ip_address` = '::1' 
 Execution Time:0.00062394142150879

SELECT GET_LOCK('01ff9e5cb7eae6231a087c34af6664a7', 300) AS ci_session_lock 
 Execution Time:0.00065302848815918

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'o61khspmmqsa47acobdqv6ltn9pcfg3m'
AND `ip_address` = '::1' 
 Execution Time:0.0008699893951416

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0027351379394531

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00062894821166992

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.0035200119018555

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0012750625610352

SHOW TABLES FROM `ospos` 
 Execution Time:0.0088231563568115

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0041170120239258

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.008868932723999

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0059831142425537

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0040299892425537

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00079989433288574

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00060200691223145

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0019440650939941

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'o61khspmmqsa47acobdqv6ltn9pcfg3m'
AND `ip_address` = '::1' 
 Execution Time:0.00073504447937012

SELECT GET_LOCK('01ff9e5cb7eae6231a087c34af6664a7', 300) AS ci_session_lock 
 Execution Time:0.00048184394836426

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'o61khspmmqsa47acobdqv6ltn9pcfg3m'
AND `ip_address` = '::1' 
 Execution Time:0.00063300132751465

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00097012519836426

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00054001808166504

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00035905838012695

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00091195106506348

SHOW TABLES FROM `ospos` 
 Execution Time:0.0030918121337891

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00062203407287598

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0011410713195801

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0013389587402344

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00065207481384277

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00066304206848145

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0011310577392578

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00097799301147461

SELECT *
FROM `ospos_item_rates`
WHERE `rate_id` = -1
AND `deleted` = 0 
 Execution Time:0.00053596496582031

SHOW COLUMNS FROM `ospos_item_rates` 
 Execution Time:0.050946950912476

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'o61khspmmqsa47acobdqv6ltn9pcfg3m'
AND `ip_address` = '::1' 
 Execution Time:0.00053501129150391

SELECT GET_LOCK('01ff9e5cb7eae6231a087c34af6664a7', 300) AS ci_session_lock 
 Execution Time:0.00037002563476562

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'o61khspmmqsa47acobdqv6ltn9pcfg3m'
AND `ip_address` = '::1' 
 Execution Time:0.0004270076751709

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0016179084777832

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00090789794921875

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00034999847412109

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00085687637329102

SHOW TABLES FROM `ospos` 
 Execution Time:0.0037469863891602

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00073599815368652

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.024574041366577

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.026876926422119

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0048110485076904

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0074281692504883

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00053977966308594

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.002316951751709

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00097513198852539

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00098991394042969

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'o61khspmmqsa47acobdqv6ltn9pcfg3m'
AND `ip_address` = '::1' 
 Execution Time:0.00055313110351562

SELECT GET_LOCK('01ff9e5cb7eae6231a087c34af6664a7', 300) AS ci_session_lock 
 Execution Time:0.00030517578125

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'o61khspmmqsa47acobdqv6ltn9pcfg3m'
AND `ip_address` = '::1' 
 Execution Time:0.0035040378570557

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00057101249694824

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0005190372467041

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00035691261291504

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0010659694671631

SHOW TABLES FROM `ospos` 
 Execution Time:0.0047259330749512

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0010051727294922

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0044679641723633

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00078892707824707

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00061798095703125

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00098013877868652

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00064897537231445

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00069403648376465

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'o61khspmmqsa47acobdqv6ltn9pcfg3m'
AND `ip_address` = '::1' 
 Execution Time:0.00071382522583008

SELECT GET_LOCK('01ff9e5cb7eae6231a087c34af6664a7', 300) AS ci_session_lock 
 Execution Time:0.0025029182434082

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'o61khspmmqsa47acobdqv6ltn9pcfg3m'
AND `ip_address` = '::1' 
 Execution Time:0.00069713592529297

UPDATE `ospos_sessions` SET `timestamp` = 1698415846, `data` = '__ci_last_regenerate|i:1698415846;person_id|s:1:\"1\";menu_group|s:6:\"office\";allow_temp_items|i:1;sale_id|i:-1;sales_location|s:1:\"1\";cash_rounding|i:0;cash_mode|i:0;sales_cart|a:0:{}sales_customer|i:-1;sales_mode|s:4:\"sale\";sales_payments|a:0:{}'
WHERE `id` = 'o61khspmmqsa47acobdqv6ltn9pcfg3m'
AND `ip_address` = '::1' 
 Execution Time:0.0044631958007812

SELECT RELEASE_LOCK('01ff9e5cb7eae6231a087c34af6664a7') AS ci_session_lock 
 Execution Time:0.00048685073852539

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'o61khspmmqsa47acobdqv6ltn9pcfg3m'
AND `ip_address` = '::1' 
 Execution Time:0.0010819435119629

SELECT GET_LOCK('42efb28fd776483cd569e92fbbea5c8a', 300) AS ci_session_lock 
 Execution Time:0.00056600570678711

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '5381j6gusl0eh045l9f2vebnsd9j9v4b'
AND `ip_address` = '::1' 
 Execution Time:0.00086688995361328

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00074005126953125

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00048613548278809

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00038313865661621

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00081896781921387

SHOW TABLES FROM `ospos` 
 Execution Time:0.0044691562652588

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00076007843017578

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00063610076904297

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00060105323791504

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00088310241699219

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00060415267944336

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00053811073303223

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00058388710021973

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00061702728271484

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00046086311340332

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '5381j6gusl0eh045l9f2vebnsd9j9v4b'
AND `ip_address` = '::1' 
 Execution Time:0.00053715705871582

SELECT GET_LOCK('42efb28fd776483cd569e92fbbea5c8a', 300) AS ci_session_lock 
 Execution Time:0.00034403800964355

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '5381j6gusl0eh045l9f2vebnsd9j9v4b'
AND `ip_address` = '::1' 
 Execution Time:0.00041794776916504

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0053739547729492

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00068521499633789

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00041103363037109

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0010209083557129

SHOW TABLES FROM `ospos` 
 Execution Time:0.0074560642242432

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00077104568481445

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0008389949798584

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00076103210449219

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00058197975158691

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00051116943359375

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00036811828613281

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099086761474609

SELECT *
FROM `ospos_item_rates`
WHERE `rate_id` = -1
AND `deleted` = 0 
 Execution Time:0.00069689750671387

SHOW COLUMNS FROM `ospos_item_rates` 
 Execution Time:0.33260607719421

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '5381j6gusl0eh045l9f2vebnsd9j9v4b'
AND `ip_address` = '::1' 
 Execution Time:0.001086950302124

SELECT GET_LOCK('42efb28fd776483cd569e92fbbea5c8a', 300) AS ci_session_lock 
 Execution Time:0.00039315223693848

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '5381j6gusl0eh045l9f2vebnsd9j9v4b'
AND `ip_address` = '::1' 
 Execution Time:0.0006861686706543

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00111985206604

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0011529922485352

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00097298622131348

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0018589496612549

SHOW TABLES FROM `ospos` 
 Execution Time:0.0059449672698975

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0014309883117676

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0013020038604736

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0012087821960449

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00066494941711426

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00065493583679199

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0019419193267822

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0051300525665283

SELECT *
FROM `ospos_item_rates`
WHERE `rate_id` = -1
AND `deleted` = 0 
 Execution Time:0.000762939453125

SHOW COLUMNS FROM `ospos_item_rates` 
 Execution Time:0.029769897460938

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '5381j6gusl0eh045l9f2vebnsd9j9v4b'
AND `ip_address` = '::1' 
 Execution Time:0.00051307678222656

SELECT GET_LOCK('42efb28fd776483cd569e92fbbea5c8a', 300) AS ci_session_lock 
 Execution Time:0.00043582916259766

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '5381j6gusl0eh045l9f2vebnsd9j9v4b'
AND `ip_address` = '::1' 
 Execution Time:0.0004889965057373

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00061392784118652

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0004580020904541

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00032901763916016

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00089216232299805

SHOW TABLES FROM `ospos` 
 Execution Time:0.0037620067596436

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00040006637573242

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00054287910461426

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00077414512634277

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010819435119629

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00056910514831543

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00051999092102051

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00066184997558594

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00081419944763184

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00055789947509766

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '5381j6gusl0eh045l9f2vebnsd9j9v4b'
AND `ip_address` = '::1' 
 Execution Time:0.0011420249938965

SELECT GET_LOCK('42efb28fd776483cd569e92fbbea5c8a', 300) AS ci_session_lock 
 Execution Time:0.00073409080505371

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '5381j6gusl0eh045l9f2vebnsd9j9v4b'
AND `ip_address` = '::1' 
 Execution Time:0.0010321140289307

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00082182884216309

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00073003768920898

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00062799453735352

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.001140832901001

SHOW TABLES FROM `ospos` 
 Execution Time:0.013228178024292

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0032889842987061

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0015709400177002

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00088095664978027

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00062990188598633

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00051498413085938

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00047802925109863

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00061416625976562

SELECT *
FROM `ospos_item_rates`
WHERE `rate_id` = -1
AND `deleted` = 0 
 Execution Time:0.0012681484222412

SHOW COLUMNS FROM `ospos_item_rates` 
 Execution Time:0.049299001693726

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '5381j6gusl0eh045l9f2vebnsd9j9v4b'
AND `ip_address` = '::1' 
 Execution Time:0.0057649612426758

SELECT GET_LOCK('42efb28fd776483cd569e92fbbea5c8a', 300) AS ci_session_lock 
 Execution Time:0.00063610076904297

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '5381j6gusl0eh045l9f2vebnsd9j9v4b'
AND `ip_address` = '::1' 
 Execution Time:0.0010480880737305

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00055694580078125

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0008080005645752

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00118088722229

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0010619163513184

SHOW TABLES FROM `ospos` 
 Execution Time:0.0061330795288086

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00047206878662109

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00047898292541504

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00058197975158691

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00060200691223145

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00039291381835938

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00050592422485352

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0005791187286377

SELECT *
FROM `ospos_item_rates`
WHERE `rate_id` = -1
AND `deleted` = 0 
 Execution Time:0.0013930797576904

SHOW COLUMNS FROM `ospos_item_rates` 
 Execution Time:0.050737857818604

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '5381j6gusl0eh045l9f2vebnsd9j9v4b'
AND `ip_address` = '::1' 
 Execution Time:0.00058388710021973

SELECT GET_LOCK('42efb28fd776483cd569e92fbbea5c8a', 300) AS ci_session_lock 
 Execution Time:0.00037097930908203

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '5381j6gusl0eh045l9f2vebnsd9j9v4b'
AND `ip_address` = '::1' 
 Execution Time:0.00075697898864746

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00066208839416504

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0041790008544922

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00072789192199707

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0012891292572021

SHOW TABLES FROM `ospos` 
 Execution Time:0.0090348720550537

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00090694427490234

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00090384483337402

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0011811256408691

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0024850368499756

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00092911720275879

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0005180835723877

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0039448738098145

SELECT *
FROM `ospos_item_rates`
WHERE `rate_id` = -1
AND `deleted` = 0 
 Execution Time:0.00051498413085938

SHOW COLUMNS FROM `ospos_item_rates` 
 Execution Time:0.044565916061401

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '5381j6gusl0eh045l9f2vebnsd9j9v4b'
AND `ip_address` = '::1' 
 Execution Time:0.00063514709472656

SELECT GET_LOCK('42efb28fd776483cd569e92fbbea5c8a', 300) AS ci_session_lock 
 Execution Time:0.00037503242492676

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '5381j6gusl0eh045l9f2vebnsd9j9v4b'
AND `ip_address` = '::1' 
 Execution Time:0.0004420280456543

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00064396858215332

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00043582916259766

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00033903121948242

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00083422660827637

SHOW TABLES FROM `ospos` 
 Execution Time:0.0033969879150391

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00041389465332031

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00070095062255859

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010061264038086

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00061321258544922

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00070810317993164

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00072979927062988

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00063800811767578

SELECT *
FROM `ospos_item_rates`
WHERE `rate_id` = -1 
 Execution Time:0.00044703483581543

INSERT INTO `ospos_item_rates` (`rate_name`, `rate_description`) VALUES ('sd', 'ds') 
 Execution Time:0.0027949810028076

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '5381j6gusl0eh045l9f2vebnsd9j9v4b'
AND `ip_address` = '::1' 
 Execution Time:0.00057792663574219

SELECT GET_LOCK('42efb28fd776483cd569e92fbbea5c8a', 300) AS ci_session_lock 
 Execution Time:0.00048494338989258

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '5381j6gusl0eh045l9f2vebnsd9j9v4b'
AND `ip_address` = '::1' 
 Execution Time:0.00056290626525879

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00060486793518066

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0004429817199707

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00030899047851562

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00084710121154785

SHOW TABLES FROM `ospos` 
 Execution Time:0.0035159587860107

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00042104721069336

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00049018859863281

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010890960693359

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00070405006408691

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00039100646972656

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00036501884460449

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0031850337982178

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00096988677978516

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010440349578857

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '5381j6gusl0eh045l9f2vebnsd9j9v4b'
AND `ip_address` = '::1' 
 Execution Time:0.002316951751709

SELECT GET_LOCK('42efb28fd776483cd569e92fbbea5c8a', 300) AS ci_session_lock 
 Execution Time:0.00071215629577637

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '5381j6gusl0eh045l9f2vebnsd9j9v4b'
AND `ip_address` = '::1' 
 Execution Time:0.001121997833252

UPDATE `ospos_sessions` SET `timestamp` = 1698416225, `data` = '__ci_last_regenerate|i:1698416225;person_id|s:1:\"1\";menu_group|s:6:\"office\";allow_temp_items|i:1;sale_id|i:-1;sales_location|s:1:\"1\";cash_rounding|i:0;cash_mode|i:0;sales_cart|a:0:{}sales_customer|i:-1;sales_mode|s:4:\"sale\";sales_payments|a:0:{}'
WHERE `id` = '5381j6gusl0eh045l9f2vebnsd9j9v4b'
AND `ip_address` = '::1' 
 Execution Time:0.0074751377105713

SELECT RELEASE_LOCK('42efb28fd776483cd569e92fbbea5c8a') AS ci_session_lock 
 Execution Time:0.00048685073852539

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '5381j6gusl0eh045l9f2vebnsd9j9v4b'
AND `ip_address` = '::1' 
 Execution Time:0.00085091590881348

SELECT GET_LOCK('ce2c79b41d98094cd0b6693dfbc2192b', 300) AS ci_session_lock 
 Execution Time:0.00055408477783203

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ce3anv7o6302vbm7kfur4515v742dj5d'
AND `ip_address` = '::1' 
 Execution Time:0.00077915191650391

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0021240711212158

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0022428035736084

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.000701904296875

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0017120838165283

SHOW TABLES FROM `ospos` 
 Execution Time:0.0057148933410645

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0010321140289307

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.018599033355713

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00096011161804199

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00060486793518066

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0085129737854004

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.001349925994873

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0012590885162354

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0012891292572021

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00073599815368652

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'ce3anv7o6302vbm7kfur4515v742dj5d'
AND `ip_address` = '::1' 
 Execution Time:0.00083804130554199

SELECT GET_LOCK('ce2c79b41d98094cd0b6693dfbc2192b', 300) AS ci_session_lock 
 Execution Time:0.00040698051452637

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ce3anv7o6302vbm7kfur4515v742dj5d'
AND `ip_address` = '::1' 
 Execution Time:0.00054311752319336

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00081801414489746

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'expenses!_categories%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0007319450378418

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'expenses!_categories!_%' ESCAPE '!' 
 Execution Time:0.00042200088500977

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0025079250335693

SHOW TABLES FROM `ospos` 
 Execution Time:0.0040271282196045

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00056099891662598

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00067901611328125

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00076818466186523

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00089812278747559

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00068902969360352

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00049591064453125

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00084710121154785

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00093913078308105

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.001262903213501

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'ce3anv7o6302vbm7kfur4515v742dj5d'
AND `ip_address` = '::1' 
 Execution Time:0.00094485282897949

SELECT GET_LOCK('ce2c79b41d98094cd0b6693dfbc2192b', 300) AS ci_session_lock 
 Execution Time:0.00051999092102051

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ce3anv7o6302vbm7kfur4515v742dj5d'
AND `ip_address` = '::1' 
 Execution Time:0.0033719539642334

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00056099891662598

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'expenses!_categories%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00041985511779785

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'expenses!_categories!_%' ESCAPE '!' 
 Execution Time:0.00030398368835449

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00074005126953125

SHOW TABLES FROM `ospos` 
 Execution Time:0.002593994140625

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0006110668182373

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00068116188049316

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00053596496582031

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00065493583679199

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0024490356445312

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0027091503143311

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00054311752319336

SELECT *
FROM `ospos_expense_categories` AS `expense_categories`
WHERE   (
`category_name` LIKE '%%' ESCAPE '!'
OR  `category_description` LIKE '%%' ESCAPE '!'
 )
AND `deleted` = 0
 LIMIT 25 
 Execution Time:0.0067811012268066

SELECT COUNT(expense_categories.expense_category_id) as count
FROM `ospos_expense_categories` AS `expense_categories`
WHERE   (
`category_name` LIKE '%%' ESCAPE '!'
OR  `category_description` LIKE '%%' ESCAPE '!'
 )
AND `deleted` = 0 
 Execution Time:0.00064897537231445

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'ce3anv7o6302vbm7kfur4515v742dj5d'
AND `ip_address` = '::1' 
 Execution Time:0.00078606605529785

SELECT GET_LOCK('ce2c79b41d98094cd0b6693dfbc2192b', 300) AS ci_session_lock 
 Execution Time:0.0003349781036377

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ce3anv7o6302vbm7kfur4515v742dj5d'
AND `ip_address` = '::1' 
 Execution Time:0.00046896934509277

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00073599815368652

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00046205520629883

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00040698051452637

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00079584121704102

SHOW TABLES FROM `ospos` 
 Execution Time:0.0027759075164795

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00049185752868652

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00053811073303223

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00054478645324707

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00043797492980957

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00037121772766113

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00036096572875977

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00058412551879883

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00067806243896484

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0004279613494873

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'ce3anv7o6302vbm7kfur4515v742dj5d'
AND `ip_address` = '::1' 
 Execution Time:0.00069308280944824

SELECT GET_LOCK('ce2c79b41d98094cd0b6693dfbc2192b', 300) AS ci_session_lock 
 Execution Time:0.00044512748718262

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ce3anv7o6302vbm7kfur4515v742dj5d'
AND `ip_address` = '::1' 
 Execution Time:0.00056600570678711

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0006568431854248

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00055503845214844

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00050210952758789

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0012009143829346

SHOW TABLES FROM `ospos` 
 Execution Time:0.0043060779571533

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00041103363037109

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00089502334594727

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00073504447937012

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00065398216247559

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00061202049255371

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.001978874206543

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00087404251098633

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'ce3anv7o6302vbm7kfur4515v742dj5d'
AND `ip_address` = '::1' 
 Execution Time:0.00069904327392578

SELECT GET_LOCK('ce2c79b41d98094cd0b6693dfbc2192b', 300) AS ci_session_lock 
 Execution Time:0.0011179447174072

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ce3anv7o6302vbm7kfur4515v742dj5d'
AND `ip_address` = '::1' 
 Execution Time:0.00078296661376953

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00069308280944824

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00068497657775879

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00034594535827637

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.004831075668335

SHOW TABLES FROM `ospos` 
 Execution Time:0.0077419281005859

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00040507316589355

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00051188468933105

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0006098747253418

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00046920776367188

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00044989585876465

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.001270055770874

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0022068023681641

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.004105806350708

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0013959407806396

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'ce3anv7o6302vbm7kfur4515v742dj5d'
AND `ip_address` = '::1' 
 Execution Time:0.00084400177001953

SELECT GET_LOCK('ce2c79b41d98094cd0b6693dfbc2192b', 300) AS ci_session_lock 
 Execution Time:0.00033903121948242

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ce3anv7o6302vbm7kfur4515v742dj5d'
AND `ip_address` = '::1' 
 Execution Time:0.00071001052856445

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0015180110931396

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0013699531555176

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.0007631778717041

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0016050338745117

SHOW TABLES FROM `ospos` 
 Execution Time:0.0064799785614014

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00043010711669922

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00043797492980957

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00066518783569336

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00064492225646973

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0011940002441406

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00095295906066895

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0006859302520752

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00071501731872559

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00057101249694824

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'ce3anv7o6302vbm7kfur4515v742dj5d'
AND `ip_address` = '::1' 
 Execution Time:0.0023760795593262

SELECT GET_LOCK('ce2c79b41d98094cd0b6693dfbc2192b', 300) AS ci_session_lock 
 Execution Time:0.00053882598876953

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ce3anv7o6302vbm7kfur4515v742dj5d'
AND `ip_address` = '::1' 
 Execution Time:0.00071907043457031

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00081515312194824

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.002190113067627

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00046205520629883

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0011541843414307

SHOW TABLES FROM `ospos` 
 Execution Time:0.0035388469696045

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00040888786315918

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00045895576477051

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0005340576171875

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00042605400085449

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00037813186645508

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00033211708068848

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0021438598632812

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00065398216247559

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00056004524230957

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'ce3anv7o6302vbm7kfur4515v742dj5d'
AND `ip_address` = '::1' 
 Execution Time:0.0031840801239014

SELECT GET_LOCK('ce2c79b41d98094cd0b6693dfbc2192b', 300) AS ci_session_lock 
 Execution Time:0.00038003921508789

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ce3anv7o6302vbm7kfur4515v742dj5d'
AND `ip_address` = '::1' 
 Execution Time:0.00055217742919922

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00069093704223633

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00064682960510254

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00042390823364258

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0016460418701172

SHOW TABLES FROM `ospos` 
 Execution Time:0.0046508312225342

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00096607208251953

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0012290477752686

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0019559860229492

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00063109397888184

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00051403045654297

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00092101097106934

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00082015991210938

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00069904327392578

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00069499015808105

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'ce3anv7o6302vbm7kfur4515v742dj5d'
AND `ip_address` = '::1' 
 Execution Time:0.0011641979217529

SELECT GET_LOCK('ce2c79b41d98094cd0b6693dfbc2192b', 300) AS ci_session_lock 
 Execution Time:0.00046706199645996

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ce3anv7o6302vbm7kfur4515v742dj5d'
AND `ip_address` = '::1' 
 Execution Time:0.00071907043457031

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00073385238647461

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00058579444885254

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00055098533630371

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0011708736419678

SHOW TABLES FROM `ospos` 
 Execution Time:0.0053479671478271

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00063896179199219

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0021250247955322

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0009770393371582

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0017950534820557

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00065994262695312

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.013916015625

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00059700012207031

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099682807922363

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00059103965759277

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'ce3anv7o6302vbm7kfur4515v742dj5d'
AND `ip_address` = '::1' 
 Execution Time:0.0014638900756836

SELECT GET_LOCK('ce2c79b41d98094cd0b6693dfbc2192b', 300) AS ci_session_lock 
 Execution Time:0.00065088272094727

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ce3anv7o6302vbm7kfur4515v742dj5d'
AND `ip_address` = '::1' 
 Execution Time:0.00093579292297363

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00057005882263184

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00084900856018066

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.0034160614013672

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0010209083557129

SHOW TABLES FROM `ospos` 
 Execution Time:0.0024068355560303

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0016169548034668

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0014121532440186

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0007789134979248

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00048589706420898

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00045108795166016

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00040507316589355

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00064301490783691

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00054383277893066

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0013999938964844

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'ce3anv7o6302vbm7kfur4515v742dj5d'
AND `ip_address` = '::1' 
 Execution Time:0.0007631778717041

SELECT GET_LOCK('ce2c79b41d98094cd0b6693dfbc2192b', 300) AS ci_session_lock 
 Execution Time:0.00036191940307617

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ce3anv7o6302vbm7kfur4515v742dj5d'
AND `ip_address` = '::1' 
 Execution Time:0.00045108795166016

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0011420249938965

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0011298656463623

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00053596496582031

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0010077953338623

SHOW TABLES FROM `ospos` 
 Execution Time:0.0026118755340576

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00049090385437012

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00045919418334961

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00050115585327148

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00047707557678223

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00054407119750977

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00072693824768066

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00058579444885254

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0006098747253418

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00050806999206543

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'ce3anv7o6302vbm7kfur4515v742dj5d'
AND `ip_address` = '::1' 
 Execution Time:0.00089383125305176

SELECT GET_LOCK('ce2c79b41d98094cd0b6693dfbc2192b', 300) AS ci_session_lock 
 Execution Time:0.00044798851013184

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ce3anv7o6302vbm7kfur4515v742dj5d'
AND `ip_address` = '::1' 
 Execution Time:0.0005791187286377

UPDATE `ospos_sessions` SET `timestamp` = 1698416601, `data` = '__ci_last_regenerate|i:1698416601;person_id|s:1:\"1\";menu_group|s:6:\"office\";allow_temp_items|i:1;sale_id|i:-1;sales_location|s:1:\"1\";cash_rounding|i:0;cash_mode|i:0;sales_cart|a:0:{}sales_customer|i:-1;sales_mode|s:4:\"sale\";sales_payments|a:0:{}'
WHERE `id` = 'ce3anv7o6302vbm7kfur4515v742dj5d'
AND `ip_address` = '::1' 
 Execution Time:0.0034952163696289

SELECT RELEASE_LOCK('ce2c79b41d98094cd0b6693dfbc2192b') AS ci_session_lock 
 Execution Time:0.00033307075500488

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'ce3anv7o6302vbm7kfur4515v742dj5d'
AND `ip_address` = '::1' 
 Execution Time:0.00052595138549805

SELECT GET_LOCK('04933a64aac95e3ee6820b8ecd92536f', 300) AS ci_session_lock 
 Execution Time:0.00025582313537598

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ftug5ss2uosdqgu4022bfqspfe6mllj4'
AND `ip_address` = '::1' 
 Execution Time:0.00070595741271973

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00067520141601562

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00055408477783203

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.0004119873046875

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.001331090927124

SHOW TABLES FROM `ospos` 
 Execution Time:0.0030190944671631

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00043916702270508

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00055789947509766

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00060200691223145

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00069212913513184

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00053501129150391

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00058102607727051

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00061702728271484

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0016310214996338

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0019779205322266

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'ftug5ss2uosdqgu4022bfqspfe6mllj4'
AND `ip_address` = '::1' 
 Execution Time:0.00066494941711426

SELECT GET_LOCK('04933a64aac95e3ee6820b8ecd92536f', 300) AS ci_session_lock 
 Execution Time:0.00029993057250977

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ftug5ss2uosdqgu4022bfqspfe6mllj4'
AND `ip_address` = '::1' 
 Execution Time:0.0003960132598877

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00094699859619141

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00098204612731934

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00066184997558594

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0014009475708008

SHOW TABLES FROM `ospos` 
 Execution Time:0.0030159950256348

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00040578842163086

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00064396858215332

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00045609474182129

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00043010711669922

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00034093856811523

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00031399726867676

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00056195259094238

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0021250247955322

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00059294700622559

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'ftug5ss2uosdqgu4022bfqspfe6mllj4'
AND `ip_address` = '::1' 
 Execution Time:0.00066995620727539

SELECT GET_LOCK('04933a64aac95e3ee6820b8ecd92536f', 300) AS ci_session_lock 
 Execution Time:0.00036907196044922

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ftug5ss2uosdqgu4022bfqspfe6mllj4'
AND `ip_address` = '::1' 
 Execution Time:0.00051021575927734

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00069403648376465

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0005030632019043

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00035595893859863

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00096297264099121

SHOW TABLES FROM `ospos` 
 Execution Time:0.0037310123443604

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0004420280456543

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00049686431884766

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00058698654174805

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00049901008605957

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00042915344238281

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00051999092102051

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00054693222045898

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00075197219848633

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.003960132598877

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'ftug5ss2uosdqgu4022bfqspfe6mllj4'
AND `ip_address` = '::1' 
 Execution Time:0.00098896026611328

SELECT GET_LOCK('04933a64aac95e3ee6820b8ecd92536f', 300) AS ci_session_lock 
 Execution Time:0.00038504600524902

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ftug5ss2uosdqgu4022bfqspfe6mllj4'
AND `ip_address` = '::1' 
 Execution Time:0.00061607360839844

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00061798095703125

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00045490264892578

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00035691261291504

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00091314315795898

SHOW TABLES FROM `ospos` 
 Execution Time:0.002960205078125

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00044512748718262

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00067591667175293

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00087499618530273

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00058889389038086

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00086116790771484

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.001338005065918

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00076580047607422

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00080490112304688

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0005040168762207

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'ftug5ss2uosdqgu4022bfqspfe6mllj4'
AND `ip_address` = '::1' 
 Execution Time:0.00073814392089844

SELECT GET_LOCK('04933a64aac95e3ee6820b8ecd92536f', 300) AS ci_session_lock 
 Execution Time:0.0003349781036377

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ftug5ss2uosdqgu4022bfqspfe6mllj4'
AND `ip_address` = '::1' 
 Execution Time:0.0005791187286377

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099015235900879

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00075697898864746

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00085282325744629

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0016129016876221

SHOW TABLES FROM `ospos` 
 Execution Time:0.0038480758666992

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00044703483581543

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00080490112304688

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0014908313751221

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00066709518432617

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00049495697021484

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00046491622924805

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00051188468933105

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00065779685974121

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00093793869018555

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'ftug5ss2uosdqgu4022bfqspfe6mllj4'
AND `ip_address` = '::1' 
 Execution Time:0.00092005729675293

SELECT GET_LOCK('04933a64aac95e3ee6820b8ecd92536f', 300) AS ci_session_lock 
 Execution Time:0.00049304962158203

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ftug5ss2uosdqgu4022bfqspfe6mllj4'
AND `ip_address` = '::1' 
 Execution Time:0.00056695938110352

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0025820732116699

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0014190673828125

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.0014150142669678

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.006443977355957

SHOW TABLES FROM `ospos` 
 Execution Time:0.017329931259155

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0027608871459961

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0021510124206543

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0043160915374756

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0038349628448486

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.003899097442627

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00092506408691406

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0012240409851074

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0032429695129395

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0016269683837891

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'ftug5ss2uosdqgu4022bfqspfe6mllj4'
AND `ip_address` = '::1' 
 Execution Time:0.002824068069458

SELECT GET_LOCK('04933a64aac95e3ee6820b8ecd92536f', 300) AS ci_session_lock 
 Execution Time:0.00046992301940918

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ftug5ss2uosdqgu4022bfqspfe6mllj4'
AND `ip_address` = '::1' 
 Execution Time:0.0015408992767334

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00081896781921387

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0031900405883789

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00051212310791016

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0012118816375732

SHOW TABLES FROM `ospos` 
 Execution Time:0.009929895401001

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00053000450134277

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0010080337524414

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.000701904296875

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0011770725250244

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0007328987121582

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0017061233520508

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0014619827270508

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'ftug5ss2uosdqgu4022bfqspfe6mllj4'
AND `ip_address` = '::1' 
 Execution Time:0.00079989433288574

SELECT GET_LOCK('04933a64aac95e3ee6820b8ecd92536f', 300) AS ci_session_lock 
 Execution Time:0.0022969245910645

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ftug5ss2uosdqgu4022bfqspfe6mllj4'
AND `ip_address` = '::1' 
 Execution Time:0.0025670528411865

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0017671585083008

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00055193901062012

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00044798851013184

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0043580532073975

SHOW TABLES FROM `ospos` 
 Execution Time:0.0084259510040283

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0011370182037354

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0013508796691895

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00052595138549805

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00060105323791504

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00061607360839844

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00051403045654297

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0011081695556641

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00089001655578613

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00046992301940918

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'ftug5ss2uosdqgu4022bfqspfe6mllj4'
AND `ip_address` = '::1' 
 Execution Time:0.00057196617126465

SELECT GET_LOCK('04933a64aac95e3ee6820b8ecd92536f', 300) AS ci_session_lock 
 Execution Time:0.00032401084899902

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ftug5ss2uosdqgu4022bfqspfe6mllj4'
AND `ip_address` = '::1' 
 Execution Time:0.00049400329589844

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00061511993408203

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00070285797119141

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00059199333190918

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0033128261566162

SHOW TABLES FROM `ospos` 
 Execution Time:0.0099470615386963

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00060796737670898

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00089311599731445

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00061511993408203

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.004127025604248

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00074887275695801

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00064682960510254

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00094389915466309

SELECT *
FROM `ospos_item_rates`
WHERE `rate_id` = -1
AND `deleted` = 0 
 Execution Time:0.00048208236694336

SHOW COLUMNS FROM `ospos_item_rates` 
 Execution Time:0.047521114349365

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'ftug5ss2uosdqgu4022bfqspfe6mllj4'
AND `ip_address` = '::1' 
 Execution Time:0.000640869140625

SELECT GET_LOCK('04933a64aac95e3ee6820b8ecd92536f', 300) AS ci_session_lock 
 Execution Time:0.00036001205444336

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ftug5ss2uosdqgu4022bfqspfe6mllj4'
AND `ip_address` = '::1' 
 Execution Time:0.00048398971557617

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00068211555480957

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00084304809570312

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00044393539428711

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0031099319458008

SHOW TABLES FROM `ospos` 
 Execution Time:0.0040619373321533

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0005190372467041

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00065398216247559

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00084304809570312

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00093317031860352

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00075697898864746

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00065207481384277

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00091981887817383

SELECT *
FROM `ospos_item_rates`
WHERE `rate_id` = -1 
 Execution Time:0.00052714347839355

INSERT INTO `ospos_item_rates` (`rate_name`, `rate_description`) VALUES ('sdf', 'ds') 
 Execution Time:0.0033998489379883

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'ftug5ss2uosdqgu4022bfqspfe6mllj4'
AND `ip_address` = '::1' 
 Execution Time:0.00078010559082031

SELECT GET_LOCK('04933a64aac95e3ee6820b8ecd92536f', 300) AS ci_session_lock 
 Execution Time:0.001086950302124

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ftug5ss2uosdqgu4022bfqspfe6mllj4'
AND `ip_address` = '::1' 
 Execution Time:0.00053811073303223

UPDATE `ospos_sessions` SET `timestamp` = 1698416950, `data` = '__ci_last_regenerate|i:1698416950;person_id|s:1:\"1\";menu_group|s:6:\"office\";allow_temp_items|i:1;sale_id|i:-1;sales_location|s:1:\"1\";cash_rounding|i:0;cash_mode|i:0;sales_cart|a:0:{}sales_customer|i:-1;sales_mode|s:4:\"sale\";sales_payments|a:0:{}'
WHERE `id` = 'ftug5ss2uosdqgu4022bfqspfe6mllj4'
AND `ip_address` = '::1' 
 Execution Time:0.0042819976806641

SELECT RELEASE_LOCK('04933a64aac95e3ee6820b8ecd92536f') AS ci_session_lock 
 Execution Time:0.00029516220092773

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'ftug5ss2uosdqgu4022bfqspfe6mllj4'
AND `ip_address` = '::1' 
 Execution Time:0.00054383277893066

SELECT GET_LOCK('c6f63f132ebb9dbb4b3550a32ba56682', 300) AS ci_session_lock 
 Execution Time:0.00025510787963867

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'afuppk7drsahg4tge3p308oo7lnso3n0'
AND `ip_address` = '::1' 
 Execution Time:0.0003969669342041

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0008089542388916

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00063204765319824

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00046491622924805

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0012009143829346

SHOW TABLES FROM `ospos` 
 Execution Time:0.0030951499938965

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00053000450134277

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00081706047058105

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00058603286743164

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00053596496582031

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00076103210449219

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.000640869140625

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00065183639526367

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0008080005645752

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0011789798736572

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'afuppk7drsahg4tge3p308oo7lnso3n0'
AND `ip_address` = '::1' 
 Execution Time:0.00068807601928711

SELECT GET_LOCK('c6f63f132ebb9dbb4b3550a32ba56682', 300) AS ci_session_lock 
 Execution Time:0.00044417381286621

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'afuppk7drsahg4tge3p308oo7lnso3n0'
AND `ip_address` = '::1' 
 Execution Time:0.00054287910461426

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0020971298217773

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0010309219360352

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00078082084655762

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0013861656188965

SHOW TABLES FROM `ospos` 
 Execution Time:0.0054371356964111

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00065207481384277

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0035738945007324

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0014321804046631

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00093388557434082

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00084590911865234

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00066590309143066

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0011398792266846

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00078201293945312

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0024631023406982

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'afuppk7drsahg4tge3p308oo7lnso3n0'
AND `ip_address` = '::1' 
 Execution Time:0.00062417984008789

SELECT GET_LOCK('c6f63f132ebb9dbb4b3550a32ba56682', 300) AS ci_session_lock 
 Execution Time:0.00034189224243164

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'afuppk7drsahg4tge3p308oo7lnso3n0'
AND `ip_address` = '::1' 
 Execution Time:0.00046300888061523

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00069308280944824

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00063395500183105

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00038504600524902

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00092911720275879

SHOW TABLES FROM `ospos` 
 Execution Time:0.005000114440918

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0011239051818848

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0036358833312988

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00066590309143066

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00078916549682617

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00075006484985352

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00062108039855957

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00066208839416504

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0007011890411377

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00074291229248047

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'afuppk7drsahg4tge3p308oo7lnso3n0'
AND `ip_address` = '::1' 
 Execution Time:0.00091910362243652

SELECT GET_LOCK('c6f63f132ebb9dbb4b3550a32ba56682', 300) AS ci_session_lock 
 Execution Time:0.00040197372436523

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'afuppk7drsahg4tge3p308oo7lnso3n0'
AND `ip_address` = '::1' 
 Execution Time:0.00071310997009277

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00072288513183594

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0018579959869385

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00054287910461426

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00090312957763672

SHOW TABLES FROM `ospos` 
 Execution Time:0.0045609474182129

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00041294097900391

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00048089027404785

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00059700012207031

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00048303604125977

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00046992301940918

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00050592422485352

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00052309036254883

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00062704086303711

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00053501129150391

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'afuppk7drsahg4tge3p308oo7lnso3n0'
AND `ip_address` = '::1' 
 Execution Time:0.00070595741271973

SELECT GET_LOCK('c6f63f132ebb9dbb4b3550a32ba56682', 300) AS ci_session_lock 
 Execution Time:0.00039291381835938

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'afuppk7drsahg4tge3p308oo7lnso3n0'
AND `ip_address` = '::1' 
 Execution Time:0.00049090385437012

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00086593627929688

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0006871223449707

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00055408477783203

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0013370513916016

SHOW TABLES FROM `ospos` 
 Execution Time:0.0023829936981201

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00041007995605469

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00058102607727051

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00067400932312012

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00097203254699707

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010099411010742

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00089383125305176

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00055885314941406

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'afuppk7drsahg4tge3p308oo7lnso3n0'
AND `ip_address` = '::1' 
 Execution Time:0.01877498626709

SELECT GET_LOCK('c6f63f132ebb9dbb4b3550a32ba56682', 300) AS ci_session_lock 
 Execution Time:0.00040483474731445

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'afuppk7drsahg4tge3p308oo7lnso3n0'
AND `ip_address` = '::1' 
 Execution Time:0.00047206878662109

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00060009956359863

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00045299530029297

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00033402442932129

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0010490417480469

SHOW TABLES FROM `ospos` 
 Execution Time:0.0080199241638184

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0026781558990479

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0022518634796143

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00050592422485352

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00047397613525391

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00041818618774414

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00043296813964844

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0006868839263916

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0011520385742188

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00075697898864746

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'afuppk7drsahg4tge3p308oo7lnso3n0'
AND `ip_address` = '::1' 
 Execution Time:0.00068020820617676

SELECT GET_LOCK('c6f63f132ebb9dbb4b3550a32ba56682', 300) AS ci_session_lock 
 Execution Time:0.00047492980957031

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'afuppk7drsahg4tge3p308oo7lnso3n0'
AND `ip_address` = '::1' 
 Execution Time:0.00060606002807617

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00061297416687012

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00042009353637695

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00044584274291992

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00086402893066406

SHOW TABLES FROM `ospos` 
 Execution Time:0.0034580230712891

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00049400329589844

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00061488151550293

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00068211555480957

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00055503845214844

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00037407875061035

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00037598609924316

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00082707405090332

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'afuppk7drsahg4tge3p308oo7lnso3n0'
AND `ip_address` = '::1' 
 Execution Time:0.00071382522583008

SELECT GET_LOCK('c6f63f132ebb9dbb4b3550a32ba56682', 300) AS ci_session_lock 
 Execution Time:0.0004730224609375

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'afuppk7drsahg4tge3p308oo7lnso3n0'
AND `ip_address` = '::1' 
 Execution Time:0.00047588348388672

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.019047975540161

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'expenses!_categories%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0010581016540527

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'expenses!_categories!_%' ESCAPE '!' 
 Execution Time:0.00055789947509766

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0011389255523682

SHOW TABLES FROM `ospos` 
 Execution Time:0.0036818981170654

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00037789344787598

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00048494338989258

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0011320114135742

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00093793869018555

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00057816505432129

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00049591064453125

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00051617622375488

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.015322923660278

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0067400932312012

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'afuppk7drsahg4tge3p308oo7lnso3n0'
AND `ip_address` = '::1' 
 Execution Time:0.0016579627990723

SELECT GET_LOCK('c6f63f132ebb9dbb4b3550a32ba56682', 300) AS ci_session_lock 
 Execution Time:0.00055313110351562

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'afuppk7drsahg4tge3p308oo7lnso3n0'
AND `ip_address` = '::1' 
 Execution Time:0.0016250610351562

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00068187713623047

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'expenses!_categories%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00044798851013184

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'expenses!_categories!_%' ESCAPE '!' 
 Execution Time:0.00039386749267578

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0021381378173828

SHOW TABLES FROM `ospos` 
 Execution Time:0.0041561126708984

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00090980529785156

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00098609924316406

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00055694580078125

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00047492980957031

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00062298774719238

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0029518604278564

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0006868839263916

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'afuppk7drsahg4tge3p308oo7lnso3n0'
AND `ip_address` = '::1' 
 Execution Time:0.00097298622131348

SELECT GET_LOCK('c6f63f132ebb9dbb4b3550a32ba56682', 300) AS ci_session_lock 
 Execution Time:0.00068783760070801

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'afuppk7drsahg4tge3p308oo7lnso3n0'
AND `ip_address` = '::1' 
 Execution Time:0.00092411041259766

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00078010559082031

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'expenses!_categories%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0006110668182373

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'expenses!_categories!_%' ESCAPE '!' 
 Execution Time:0.00040888786315918

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00089502334594727

SHOW TABLES FROM `ospos` 
 Execution Time:0.0041780471801758

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00074315071105957

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00065898895263672

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00057291984558105

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00076723098754883

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00055408477783203

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00056004524230957

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00057196617126465

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00081300735473633

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00063395500183105

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'afuppk7drsahg4tge3p308oo7lnso3n0'
AND `ip_address` = '::1' 
 Execution Time:0.00095415115356445

SELECT GET_LOCK('c6f63f132ebb9dbb4b3550a32ba56682', 300) AS ci_session_lock 
 Execution Time:0.00054502487182617

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'afuppk7drsahg4tge3p308oo7lnso3n0'
AND `ip_address` = '::1' 
 Execution Time:0.00068211555480957

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00067496299743652

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'expenses!_categories%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00064706802368164

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'expenses!_categories!_%' ESCAPE '!' 
 Execution Time:0.00044012069702148

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00089502334594727

SHOW TABLES FROM `ospos` 
 Execution Time:0.0035350322723389

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0017290115356445

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00083088874816895

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00066590309143066

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00056791305541992

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00049304962158203

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00050902366638184

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00061583518981934

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'afuppk7drsahg4tge3p308oo7lnso3n0'
AND `ip_address` = '::1' 
 Execution Time:0.0010809898376465

SELECT GET_LOCK('c6f63f132ebb9dbb4b3550a32ba56682', 300) AS ci_session_lock 
 Execution Time:0.00036001205444336

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'afuppk7drsahg4tge3p308oo7lnso3n0'
AND `ip_address` = '::1' 
 Execution Time:0.00058388710021973

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00061392784118652

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'expenses!_categories%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00052189826965332

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'expenses!_categories!_%' ESCAPE '!' 
 Execution Time:0.00040698051452637

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0010888576507568

SHOW TABLES FROM `ospos` 
 Execution Time:0.0041811466217041

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00045895576477051

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0011148452758789

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0014989376068115

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00086593627929688

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00083208084106445

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0006721019744873

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00063204765319824

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00065994262695312

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0028209686279297

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'afuppk7drsahg4tge3p308oo7lnso3n0'
AND `ip_address` = '::1' 
 Execution Time:0.00056600570678711

SELECT GET_LOCK('c6f63f132ebb9dbb4b3550a32ba56682', 300) AS ci_session_lock 
 Execution Time:0.0011138916015625

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'afuppk7drsahg4tge3p308oo7lnso3n0'
AND `ip_address` = '::1' 
 Execution Time:0.0021440982818604

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00061392784118652

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'expenses!_categories%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.000518798828125

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'expenses!_categories!_%' ESCAPE '!' 
 Execution Time:0.00049185752868652

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0014660358428955

SHOW TABLES FROM `ospos` 
 Execution Time:0.0036969184875488

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00047087669372559

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00053191184997559

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00072097778320312

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00059604644775391

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00045394897460938

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00041913986206055

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0006859302520752

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'afuppk7drsahg4tge3p308oo7lnso3n0'
AND `ip_address` = '::1' 
 Execution Time:0.00063395500183105

SELECT GET_LOCK('c6f63f132ebb9dbb4b3550a32ba56682', 300) AS ci_session_lock 
 Execution Time:0.00033402442932129

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'afuppk7drsahg4tge3p308oo7lnso3n0'
AND `ip_address` = '::1' 
 Execution Time:0.00051498413085938

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00072383880615234

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00062894821166992

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00067901611328125

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00092387199401855

SHOW TABLES FROM `ospos` 
 Execution Time:0.0036969184875488

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00081181526184082

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00075101852416992

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0008389949798584

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010080337524414

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00076508522033691

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00075984001159668

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0006258487701416

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00064396858215332

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00058794021606445

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'afuppk7drsahg4tge3p308oo7lnso3n0'
AND `ip_address` = '::1' 
 Execution Time:0.00063395500183105

SELECT GET_LOCK('c6f63f132ebb9dbb4b3550a32ba56682', 300) AS ci_session_lock 
 Execution Time:0.00043797492980957

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'afuppk7drsahg4tge3p308oo7lnso3n0'
AND `ip_address` = '::1' 
 Execution Time:0.00068306922912598

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00072216987609863

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'expenses!_categories%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00049495697021484

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'expenses!_categories!_%' ESCAPE '!' 
 Execution Time:0.00059700012207031

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0013229846954346

SHOW TABLES FROM `ospos` 
 Execution Time:0.0032620429992676

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00047492980957031

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00060796737670898

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00063896179199219

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00064802169799805

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00054717063903809

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00044083595275879

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010712146759033

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0038278102874756

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.030451774597168

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'afuppk7drsahg4tge3p308oo7lnso3n0'
AND `ip_address` = '::1' 
 Execution Time:0.00068807601928711

SELECT GET_LOCK('c6f63f132ebb9dbb4b3550a32ba56682', 300) AS ci_session_lock 
 Execution Time:0.00046896934509277

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'afuppk7drsahg4tge3p308oo7lnso3n0'
AND `ip_address` = '::1' 
 Execution Time:0.00086808204650879

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00072479248046875

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'expenses!_categories%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0028181076049805

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'expenses!_categories!_%' ESCAPE '!' 
 Execution Time:0.00078701972961426

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0011091232299805

SHOW TABLES FROM `ospos` 
 Execution Time:0.0075068473815918

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00046801567077637

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0005180835723877

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0006110668182373

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00049781799316406

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00050902366638184

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00045609474182129

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00067400932312012

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'afuppk7drsahg4tge3p308oo7lnso3n0'
AND `ip_address` = '::1' 
 Execution Time:0.00090193748474121

SELECT GET_LOCK('c6f63f132ebb9dbb4b3550a32ba56682', 300) AS ci_session_lock 
 Execution Time:0.00039482116699219

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'afuppk7drsahg4tge3p308oo7lnso3n0'
AND `ip_address` = '::1' 
 Execution Time:0.00067996978759766

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00075602531433105

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0005958080291748

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00045514106750488

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0013480186462402

SHOW TABLES FROM `ospos` 
 Execution Time:0.0037839412689209

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00055408477783203

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00070095062255859

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00086808204650879

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0012478828430176

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0015850067138672

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0016610622406006

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.001539945602417

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0011041164398193

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00088691711425781

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'afuppk7drsahg4tge3p308oo7lnso3n0'
AND `ip_address` = '::1' 
 Execution Time:0.00098705291748047

SELECT GET_LOCK('c6f63f132ebb9dbb4b3550a32ba56682', 300) AS ci_session_lock 
 Execution Time:0.00069999694824219

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'afuppk7drsahg4tge3p308oo7lnso3n0'
AND `ip_address` = '::1' 
 Execution Time:0.0012161731719971

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0017409324645996

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'expenses!_categories%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0010581016540527

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'expenses!_categories!_%' ESCAPE '!' 
 Execution Time:0.0011029243469238

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0017800331115723

SHOW TABLES FROM `ospos` 
 Execution Time:0.008185863494873

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0033769607543945

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0018730163574219

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0020959377288818

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0017399787902832

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0012471675872803

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010020732879639

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0011301040649414

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010430812835693

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0013859272003174

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'afuppk7drsahg4tge3p308oo7lnso3n0'
AND `ip_address` = '::1' 
 Execution Time:0.0006868839263916

SELECT GET_LOCK('c6f63f132ebb9dbb4b3550a32ba56682', 300) AS ci_session_lock 
 Execution Time:0.001115083694458

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'afuppk7drsahg4tge3p308oo7lnso3n0'
AND `ip_address` = '::1' 
 Execution Time:0.00070595741271973

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00060105323791504

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'expenses!_categories%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00046896934509277

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'expenses!_categories!_%' ESCAPE '!' 
 Execution Time:0.00039911270141602

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00089216232299805

SHOW TABLES FROM `ospos` 
 Execution Time:0.0030350685119629

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00044512748718262

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00053977966308594

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00088214874267578

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00064206123352051

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0017321109771729

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0015809535980225

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00060892105102539

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'afuppk7drsahg4tge3p308oo7lnso3n0'
AND `ip_address` = '::1' 
 Execution Time:0.00065517425537109

SELECT GET_LOCK('c6f63f132ebb9dbb4b3550a32ba56682', 300) AS ci_session_lock 
 Execution Time:0.00051116943359375

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'afuppk7drsahg4tge3p308oo7lnso3n0'
AND `ip_address` = '::1' 
 Execution Time:0.00054097175598145

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00082588195800781

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00085592269897461

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00078105926513672

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0018131732940674

SHOW TABLES FROM `ospos` 
 Execution Time:0.0030980110168457

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00054383277893066

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00081300735473633

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00066399574279785

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00066614151000977

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00056290626525879

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00057816505432129

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00069308280944824

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00065779685974121

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00048303604125977

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'afuppk7drsahg4tge3p308oo7lnso3n0'
AND `ip_address` = '::1' 
 Execution Time:0.00074100494384766

SELECT GET_LOCK('c6f63f132ebb9dbb4b3550a32ba56682', 300) AS ci_session_lock 
 Execution Time:0.00068902969360352

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'afuppk7drsahg4tge3p308oo7lnso3n0'
AND `ip_address` = '::1' 
 Execution Time:0.0011081695556641

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00061893463134766

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'expenses!_categories%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00046396255493164

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'expenses!_categories!_%' ESCAPE '!' 
 Execution Time:0.00037312507629395

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00089001655578613

SHOW TABLES FROM `ospos` 
 Execution Time:0.004443883895874

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00053310394287109

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0006260871887207

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00060296058654785

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00061798095703125

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00059604644775391

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00050497055053711

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00072312355041504

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0013141632080078

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00055694580078125

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'afuppk7drsahg4tge3p308oo7lnso3n0'
AND `ip_address` = '::1' 
 Execution Time:0.0005791187286377

SELECT GET_LOCK('c6f63f132ebb9dbb4b3550a32ba56682', 300) AS ci_session_lock 
 Execution Time:0.00033211708068848

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'afuppk7drsahg4tge3p308oo7lnso3n0'
AND `ip_address` = '::1' 
 Execution Time:0.00058603286743164

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00091910362243652

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'expenses!_categories%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00086498260498047

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'expenses!_categories!_%' ESCAPE '!' 
 Execution Time:0.00045204162597656

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00089812278747559

SHOW TABLES FROM `ospos` 
 Execution Time:0.0057060718536377

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00051784515380859

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00054287910461426

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00059890747070312

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00055408477783203

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0004889965057373

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0014798641204834

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00069189071655273

SELECT *
FROM `ospos_expense_categories` AS `expense_categories`
WHERE   (
`category_name` LIKE '%%' ESCAPE '!'
OR  `category_description` LIKE '%%' ESCAPE '!'
 )
AND `deleted` = 0
 LIMIT 25 
 Execution Time:0.0005950927734375

SELECT COUNT(expense_categories.expense_category_id) as count
FROM `ospos_expense_categories` AS `expense_categories`
WHERE   (
`category_name` LIKE '%%' ESCAPE '!'
OR  `category_description` LIKE '%%' ESCAPE '!'
 )
AND `deleted` = 0 
 Execution Time:0.00040984153747559

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'afuppk7drsahg4tge3p308oo7lnso3n0'
AND `ip_address` = '::1' 
 Execution Time:0.00071907043457031

SELECT GET_LOCK('c6f63f132ebb9dbb4b3550a32ba56682', 300) AS ci_session_lock 
 Execution Time:0.00040078163146973

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'afuppk7drsahg4tge3p308oo7lnso3n0'
AND `ip_address` = '::1' 
 Execution Time:0.00062918663024902

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00063395500183105

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0015618801116943

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.0023360252380371

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.000946044921875

SHOW TABLES FROM `ospos` 
 Execution Time:0.003993034362793

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00045895576477051

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00056290626525879

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00063395500183105

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00056791305541992

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00061488151550293

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00048685073852539

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00057506561279297

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00066590309143066

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00047016143798828

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'afuppk7drsahg4tge3p308oo7lnso3n0'
AND `ip_address` = '::1' 
 Execution Time:0.00072908401489258

SELECT GET_LOCK('c6f63f132ebb9dbb4b3550a32ba56682', 300) AS ci_session_lock 
 Execution Time:0.00040698051452637

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'afuppk7drsahg4tge3p308oo7lnso3n0'
AND `ip_address` = '::1' 
 Execution Time:0.00055599212646484

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00078010559082031

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'expenses!_categories%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00074481964111328

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'expenses!_categories!_%' ESCAPE '!' 
 Execution Time:0.00059986114501953

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0019581317901611

SHOW TABLES FROM `ospos` 
 Execution Time:0.0059821605682373

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00053000450134277

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00067496299743652

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00090503692626953

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00083303451538086

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0016689300537109

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0013909339904785

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0026500225067139

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.001378059387207

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0012869834899902

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'afuppk7drsahg4tge3p308oo7lnso3n0'
AND `ip_address` = '::1' 
 Execution Time:0.00068998336791992

SELECT GET_LOCK('c6f63f132ebb9dbb4b3550a32ba56682', 300) AS ci_session_lock 
 Execution Time:0.00034689903259277

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'afuppk7drsahg4tge3p308oo7lnso3n0'
AND `ip_address` = '::1' 
 Execution Time:0.00049304962158203

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00053501129150391

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'expenses!_categories%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00052404403686523

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'expenses!_categories!_%' ESCAPE '!' 
 Execution Time:0.00040197372436523

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00086808204650879

SHOW TABLES FROM `ospos` 
 Execution Time:0.0035688877105713

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00046706199645996

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00053691864013672

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0012309551239014

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00089597702026367

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00076603889465332

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0031380653381348

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00068116188049316

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'afuppk7drsahg4tge3p308oo7lnso3n0'
AND `ip_address` = '::1' 
 Execution Time:0.00071382522583008

SELECT GET_LOCK('c6f63f132ebb9dbb4b3550a32ba56682', 300) AS ci_session_lock 
 Execution Time:0.00048518180847168

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'afuppk7drsahg4tge3p308oo7lnso3n0'
AND `ip_address` = '::1' 
 Execution Time:0.00078105926513672

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00070905685424805

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'expenses!_categories%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0005180835723877

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'expenses!_categories!_%' ESCAPE '!' 
 Execution Time:0.0003960132598877

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00099086761474609

SHOW TABLES FROM `ospos` 
 Execution Time:0.0034909248352051

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00091409683227539

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0015859603881836

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00073790550231934

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00089716911315918

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00073599815368652

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00060510635375977

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00091099739074707

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00096011161804199

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0029780864715576

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'afuppk7drsahg4tge3p308oo7lnso3n0'
AND `ip_address` = '::1' 
 Execution Time:0.002964973449707

SELECT GET_LOCK('c6f63f132ebb9dbb4b3550a32ba56682', 300) AS ci_session_lock 
 Execution Time:0.00040888786315918

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'afuppk7drsahg4tge3p308oo7lnso3n0'
AND `ip_address` = '::1' 
 Execution Time:0.0011641979217529

UPDATE `ospos_sessions` SET `timestamp` = 1698417334, `data` = '__ci_last_regenerate|i:1698417334;person_id|s:1:\"1\";menu_group|s:6:\"office\";allow_temp_items|i:1;sale_id|i:-1;sales_location|s:1:\"1\";cash_rounding|i:0;cash_mode|i:0;sales_cart|a:0:{}sales_customer|i:-1;sales_mode|s:4:\"sale\";sales_payments|a:0:{}'
WHERE `id` = 'afuppk7drsahg4tge3p308oo7lnso3n0'
AND `ip_address` = '::1' 
 Execution Time:0.0029149055480957

SELECT RELEASE_LOCK('c6f63f132ebb9dbb4b3550a32ba56682') AS ci_session_lock 
 Execution Time:0.00045108795166016

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'afuppk7drsahg4tge3p308oo7lnso3n0'
AND `ip_address` = '::1' 
 Execution Time:0.00059294700622559

SELECT GET_LOCK('eaf955b87b7cfd9f50455fdffe28215f', 300) AS ci_session_lock 
 Execution Time:0.00029706954956055

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '611nqklolsvt1kug0fjareieor91vlj2'
AND `ip_address` = '::1' 
 Execution Time:0.00063300132751465

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00079083442687988

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rate%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00065994262695312

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rate!_%' ESCAPE '!' 
 Execution Time:0.0003969669342041

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00091195106506348

SHOW TABLES FROM `ospos` 
 Execution Time:0.0036640167236328

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0007472038269043

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00071287155151367

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00060510635375977

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00051999092102051

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010271072387695

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0028488636016846

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00059294700622559

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00076794624328613

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.002061128616333

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '611nqklolsvt1kug0fjareieor91vlj2'
AND `ip_address` = '::1' 
 Execution Time:0.00080108642578125

SELECT GET_LOCK('eaf955b87b7cfd9f50455fdffe28215f', 300) AS ci_session_lock 
 Execution Time:0.00038504600524902

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '611nqklolsvt1kug0fjareieor91vlj2'
AND `ip_address` = '::1' 
 Execution Time:0.00065517425537109

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00062417984008789

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rate%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00052499771118164

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rate!_%' ESCAPE '!' 
 Execution Time:0.00040388107299805

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00090599060058594

SHOW TABLES FROM `ospos` 
 Execution Time:0.0033190250396729

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00045990943908691

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00083208084106445

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0006110668182373

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00054383277893066

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00062298774719238

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00075101852416992

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00064206123352051

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.001025915145874

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00055718421936035

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '611nqklolsvt1kug0fjareieor91vlj2'
AND `ip_address` = '::1' 
 Execution Time:0.00090694427490234

SELECT GET_LOCK('eaf955b87b7cfd9f50455fdffe28215f', 300) AS ci_session_lock 
 Execution Time:0.00049209594726562

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '611nqklolsvt1kug0fjareieor91vlj2'
AND `ip_address` = '::1' 
 Execution Time:0.00072312355041504

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00066995620727539

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00063800811767578

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00051212310791016

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0009770393371582

SHOW TABLES FROM `ospos` 
 Execution Time:0.0053780078887939

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0004429817199707

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00056290626525879

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0009610652923584

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0011320114135742

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00048685073852539

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00050187110900879

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0021600723266602

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00065302848815918

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00050878524780273

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '611nqklolsvt1kug0fjareieor91vlj2'
AND `ip_address` = '::1' 
 Execution Time:0.0040380954742432

SELECT GET_LOCK('eaf955b87b7cfd9f50455fdffe28215f', 300) AS ci_session_lock 
 Execution Time:0.01484203338623

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '611nqklolsvt1kug0fjareieor91vlj2'
AND `ip_address` = '::1' 
 Execution Time:0.00063204765319824

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0095851421356201

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0036931037902832

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.0012800693511963

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0083589553833008

SHOW TABLES FROM `ospos` 
 Execution Time:0.023445129394531

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.004845142364502

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0011558532714844

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.001600980758667

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0023050308227539

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.000823974609375

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0023031234741211

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00072097778320312

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00061297416687012

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0041239261627197

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '611nqklolsvt1kug0fjareieor91vlj2'
AND `ip_address` = '::1' 
 Execution Time:0.00056314468383789

SELECT GET_LOCK('eaf955b87b7cfd9f50455fdffe28215f', 300) AS ci_session_lock 
 Execution Time:0.00033998489379883

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '611nqklolsvt1kug0fjareieor91vlj2'
AND `ip_address` = '::1' 
 Execution Time:0.00050115585327148

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00071215629577637

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00049495697021484

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.0004279613494873

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00095891952514648

SHOW TABLES FROM `ospos` 
 Execution Time:0.0053927898406982

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00045418739318848

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00056314468383789

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00057697296142578

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00055885314941406

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00072598457336426

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0004880428314209

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0007779598236084

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '611nqklolsvt1kug0fjareieor91vlj2'
AND `ip_address` = '::1' 
 Execution Time:0.00059294700622559

SELECT GET_LOCK('eaf955b87b7cfd9f50455fdffe28215f', 300) AS ci_session_lock 
 Execution Time:0.00051712989807129

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '611nqklolsvt1kug0fjareieor91vlj2'
AND `ip_address` = '::1' 
 Execution Time:0.00059604644775391

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00059413909912109

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00042510032653809

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00047922134399414

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00097513198852539

SHOW TABLES FROM `ospos` 
 Execution Time:0.0049009323120117

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00063014030456543

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0011820793151855

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00079107284545898

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00068211555480957

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00071501731872559

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00068306922912598

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0013809204101562

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0013270378112793

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00057601928710938

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '611nqklolsvt1kug0fjareieor91vlj2'
AND `ip_address` = '::1' 
 Execution Time:0.00083589553833008

SELECT GET_LOCK('eaf955b87b7cfd9f50455fdffe28215f', 300) AS ci_session_lock 
 Execution Time:0.0003960132598877

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '611nqklolsvt1kug0fjareieor91vlj2'
AND `ip_address` = '::1' 
 Execution Time:0.00067710876464844

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00077319145202637

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00065803527832031

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.0004730224609375

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0013189315795898

SHOW TABLES FROM `ospos` 
 Execution Time:0.0033581256866455

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00072216987609863

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0008089542388916

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00081992149353027

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00053906440734863

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00072693824768066

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0017218589782715

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.033366918563843

SELECT *
FROM `ospos_item_rates` AS `item_rates`
WHERE   (
`rate_name` LIKE '%%' ESCAPE '!'
OR  `rate_desciption` LIKE '%%' ESCAPE '!'
 )
AND `deleted` = 0
 LIMIT 25 
 Execution Time:0

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '611nqklolsvt1kug0fjareieor91vlj2'
AND `ip_address` = '::1' 
 Execution Time:0.00057816505432129

SELECT GET_LOCK('eaf955b87b7cfd9f50455fdffe28215f', 300) AS ci_session_lock 
 Execution Time:0.00036096572875977

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '611nqklolsvt1kug0fjareieor91vlj2'
AND `ip_address` = '::1' 
 Execution Time:0.00054121017456055

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00063610076904297

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00044798851013184

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00035595893859863

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00086021423339844

SHOW TABLES FROM `ospos` 
 Execution Time:0.0029640197753906

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00058221817016602

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00057506561279297

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00063300132751465

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0018749237060547

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00085186958312988

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00053596496582031

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0006251335144043

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00074982643127441

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00093507766723633

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '84jtneeds4q2ogb2nhf6n8j47p2jl3bs'
AND `ip_address` = '::1' 
 Execution Time:0.00095200538635254

SELECT GET_LOCK('256a00f9b66460fbfddd80eba4cec3c9', 300) AS ci_session_lock 
 Execution Time:0.00040888786315918

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '84jtneeds4q2ogb2nhf6n8j47p2jl3bs'
AND `ip_address` = '::1' 
 Execution Time:0.00058603286743164

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00080299377441406

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00072503089904785

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.0012118816375732

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0023999214172363

SHOW TABLES FROM `ospos` 
 Execution Time:0.007072925567627

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00053095817565918

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00077605247497559

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00052309036254883

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0012118816375732

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010251998901367

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00062894821166992

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00089907646179199

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.001568078994751

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00048112869262695

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '84jtneeds4q2ogb2nhf6n8j47p2jl3bs'
AND `ip_address` = '::1' 
 Execution Time:0.0031390190124512

SELECT GET_LOCK('256a00f9b66460fbfddd80eba4cec3c9', 300) AS ci_session_lock 
 Execution Time:0.00068998336791992

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '84jtneeds4q2ogb2nhf6n8j47p2jl3bs'
AND `ip_address` = '::1' 
 Execution Time:0.0011088848114014

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00068378448486328

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0061171054840088

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00045299530029297

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0012359619140625

SHOW TABLES FROM `ospos` 
 Execution Time:0.0061061382293701

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0005190372467041

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00148606300354

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00069999694824219

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0011110305786133

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00088286399841309

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0044269561767578

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00087499618530273

SELECT *
FROM `ospos_item_rates` AS `item_rates`
WHERE   (
`rate_name` LIKE '%%' ESCAPE '!'
OR  `rate_description` LIKE '%%' ESCAPE '!'
 )
AND `deleted` = 0
 LIMIT 25 
 Execution Time:0.0024030208587646

SELECT COUNT(item_rates.rate_id) as count
FROM `ospos_item_rates` AS `item_rates`
WHERE   (
`rate_name` LIKE '%%' ESCAPE '!'
OR  `rate_description` LIKE '%%' ESCAPE '!'
 )
AND `deleted` = 0 
 Execution Time:0.00051403045654297

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '84jtneeds4q2ogb2nhf6n8j47p2jl3bs'
AND `ip_address` = '::1' 
 Execution Time:0.00094413757324219

SELECT GET_LOCK('256a00f9b66460fbfddd80eba4cec3c9', 300) AS ci_session_lock 
 Execution Time:0.00047516822814941

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '84jtneeds4q2ogb2nhf6n8j47p2jl3bs'
AND `ip_address` = '::1' 
 Execution Time:0.00066208839416504

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0007021427154541

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00062012672424316

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00061392784118652

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00096917152404785

SHOW TABLES FROM `ospos` 
 Execution Time:0.0038630962371826

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00050902366638184

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00075697898864746

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010581016540527

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0014450550079346

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00092983245849609

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0026810169219971

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0030479431152344

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00061917304992676

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0012130737304688

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '84jtneeds4q2ogb2nhf6n8j47p2jl3bs'
AND `ip_address` = '::1' 
 Execution Time:0.00066900253295898

SELECT GET_LOCK('256a00f9b66460fbfddd80eba4cec3c9', 300) AS ci_session_lock 
 Execution Time:0.0006558895111084

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '84jtneeds4q2ogb2nhf6n8j47p2jl3bs'
AND `ip_address` = '::1' 
 Execution Time:0.00061607360839844

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00087404251098633

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.002755880355835

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.0025460720062256

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0012860298156738

SHOW TABLES FROM `ospos` 
 Execution Time:0.0051851272583008

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00045609474182129

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00053286552429199

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00064492225646973

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00057196617126465

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00044584274291992

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00078606605529785

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00062203407287598

SELECT *
FROM `ospos_item_rates` AS `item_rates`
WHERE   (
`rate_name` LIKE '%%' ESCAPE '!'
OR  `rate_description` LIKE '%%' ESCAPE '!'
 )
AND `deleted` = 0
 LIMIT 25 
 Execution Time:0.0005948543548584

SELECT COUNT(item_rates.rate_id) as count
FROM `ospos_item_rates` AS `item_rates`
WHERE   (
`rate_name` LIKE '%%' ESCAPE '!'
OR  `rate_description` LIKE '%%' ESCAPE '!'
 )
AND `deleted` = 0 
 Execution Time:0.00050783157348633

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '84jtneeds4q2ogb2nhf6n8j47p2jl3bs'
AND `ip_address` = '::1' 
 Execution Time:0.00054097175598145

SELECT GET_LOCK('256a00f9b66460fbfddd80eba4cec3c9', 300) AS ci_session_lock 
 Execution Time:0.00037193298339844

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '84jtneeds4q2ogb2nhf6n8j47p2jl3bs'
AND `ip_address` = '::1' 
 Execution Time:0.0010850429534912

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00081396102905273

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00063204765319824

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.0017261505126953

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0010628700256348

SHOW TABLES FROM `ospos` 
 Execution Time:0.011620998382568

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00045490264892578

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00076889991760254

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.001619815826416

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0023908615112305

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00063800811767578

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00050997734069824

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0006098747253418

SELECT *
FROM `ospos_item_rates`
WHERE `rate_id` = '3'
AND `deleted` = 0 
 Execution Time:0.00055098533630371

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '84jtneeds4q2ogb2nhf6n8j47p2jl3bs'
AND `ip_address` = '::1' 
 Execution Time:0.00060486793518066

SELECT GET_LOCK('256a00f9b66460fbfddd80eba4cec3c9', 300) AS ci_session_lock 
 Execution Time:0.0003349781036377

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '84jtneeds4q2ogb2nhf6n8j47p2jl3bs'
AND `ip_address` = '::1' 
 Execution Time:0.00045108795166016

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0011229515075684

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.004957914352417

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.012426137924194

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0034110546112061

SHOW TABLES FROM `ospos` 
 Execution Time:0.016333103179932

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0060980319976807

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0015771389007568

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00079894065856934

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00086092948913574

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0015411376953125

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0014631748199463

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0011928081512451

SELECT *
FROM `ospos_item_rates`
WHERE `rate_id` = '3' 
 Execution Time:0.00058817863464355

UPDATE `ospos_item_rates` SET `rate_name` = 'sdf', `rate_description` = 'dsasdas'
WHERE `rate_id` = '3' 
 Execution Time:0.00372314453125

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '84jtneeds4q2ogb2nhf6n8j47p2jl3bs'
AND `ip_address` = '::1' 
 Execution Time:0.0025758743286133

SELECT GET_LOCK('256a00f9b66460fbfddd80eba4cec3c9', 300) AS ci_session_lock 
 Execution Time:0.00053310394287109

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '84jtneeds4q2ogb2nhf6n8j47p2jl3bs'
AND `ip_address` = '::1' 
 Execution Time:0.00045609474182129

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00075006484985352

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00058197975158691

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00055289268493652

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0007781982421875

SHOW TABLES FROM `ospos` 
 Execution Time:0.0024781227111816

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00046706199645996

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00088882446289062

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00073099136352539

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00053596496582031

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00040602684020996

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0003809928894043

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0005950927734375

SELECT *
FROM `ospos_item_rates`
WHERE `rate_id` = '3'
AND `deleted` = 0 
 Execution Time:0.00052499771118164

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '84jtneeds4q2ogb2nhf6n8j47p2jl3bs'
AND `ip_address` = '::1' 
 Execution Time:0.00095391273498535

SELECT GET_LOCK('256a00f9b66460fbfddd80eba4cec3c9', 300) AS ci_session_lock 
 Execution Time:0.00032615661621094

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '84jtneeds4q2ogb2nhf6n8j47p2jl3bs'
AND `ip_address` = '::1' 
 Execution Time:0.00050187110900879

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00080394744873047

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00076794624328613

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.0055000782012939

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.001072883605957

SHOW TABLES FROM `ospos` 
 Execution Time:0.0095438957214355

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00046396255493164

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00062203407287598

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00076103210449219

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0019998550415039

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0021510124206543

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00061702728271484

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00075888633728027

SELECT *
FROM `ospos_item_rates`
WHERE `rate_id` = -1
AND `deleted` = 0 
 Execution Time:0.0006709098815918

SHOW COLUMNS FROM `ospos_item_rates` 
 Execution Time:0.032777070999146

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '84jtneeds4q2ogb2nhf6n8j47p2jl3bs'
AND `ip_address` = '::1' 
 Execution Time:0.00081682205200195

SELECT GET_LOCK('256a00f9b66460fbfddd80eba4cec3c9', 300) AS ci_session_lock 
 Execution Time:0.0010509490966797

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '84jtneeds4q2ogb2nhf6n8j47p2jl3bs'
AND `ip_address` = '::1' 
 Execution Time:0.00070500373840332

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00059294700622559

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00066900253295898

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00089287757873535

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0009911060333252

SHOW TABLES FROM `ospos` 
 Execution Time:0.0035209655761719

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00045394897460938

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0008389949798584

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0013358592987061

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00063991546630859

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00070095062255859

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00071287155151367

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0013148784637451

SELECT *
FROM `ospos_item_rates`
WHERE `rate_id` = -1 
 Execution Time:0.00049996376037598

INSERT INTO `ospos_item_rates` (`rate_name`, `rate_description`) VALUES ('asd', 'asd') 
 Execution Time:0.0055050849914551

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '84jtneeds4q2ogb2nhf6n8j47p2jl3bs'
AND `ip_address` = '::1' 
 Execution Time:0.00062203407287598

SELECT GET_LOCK('256a00f9b66460fbfddd80eba4cec3c9', 300) AS ci_session_lock 
 Execution Time:0.00038909912109375

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '84jtneeds4q2ogb2nhf6n8j47p2jl3bs'
AND `ip_address` = '::1' 
 Execution Time:0.00074601173400879

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.019990205764771

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0098850727081299

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.0022361278533936

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0097708702087402

SHOW TABLES FROM `ospos` 
 Execution Time:0.040802955627441

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0007319450378418

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00072216987609863

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00061607360839844

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0007789134979248

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00052213668823242

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00045585632324219

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00065016746520996

SELECT *
FROM `ospos_item_rates` AS `item_rates`
WHERE   (
`rate_name` LIKE '%%' ESCAPE '!'
OR  `rate_description` LIKE '%%' ESCAPE '!'
 )
AND `deleted` = 0
 LIMIT 25 
 Execution Time:0.00058603286743164

SELECT COUNT(item_rates.rate_id) as count
FROM `ospos_item_rates` AS `item_rates`
WHERE   (
`rate_name` LIKE '%%' ESCAPE '!'
OR  `rate_description` LIKE '%%' ESCAPE '!'
 )
AND `deleted` = 0 
 Execution Time:0.0010180473327637

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '84jtneeds4q2ogb2nhf6n8j47p2jl3bs'
AND `ip_address` = '::1' 
 Execution Time:0.00076889991760254

SELECT GET_LOCK('256a00f9b66460fbfddd80eba4cec3c9', 300) AS ci_session_lock 
 Execution Time:0.00036191940307617

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '84jtneeds4q2ogb2nhf6n8j47p2jl3bs'
AND `ip_address` = '::1' 
 Execution Time:0.0007469654083252

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00079798698425293

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00064992904663086

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00053811073303223

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0031919479370117

SHOW TABLES FROM `ospos` 
 Execution Time:0.0041840076446533

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00043797492980957

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00064611434936523

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00079703330993652

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00064206123352051

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0005638599395752

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00060582160949707

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00085997581481934

UPDATE `ospos_item_rates` SET `deleted` = 1
WHERE `rate_id` IN('4') 
 Execution Time:0.0027890205383301

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '84jtneeds4q2ogb2nhf6n8j47p2jl3bs'
AND `ip_address` = '::1' 
 Execution Time:0.00065016746520996

SELECT GET_LOCK('256a00f9b66460fbfddd80eba4cec3c9', 300) AS ci_session_lock 
 Execution Time:0.00037717819213867

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '84jtneeds4q2ogb2nhf6n8j47p2jl3bs'
AND `ip_address` = '::1' 
 Execution Time:0.00047707557678223

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00071287155151367

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00064492225646973

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00051283836364746

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0012171268463135

SHOW TABLES FROM `ospos` 
 Execution Time:0.0041930675506592

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00091695785522461

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0008089542388916

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00082993507385254

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0006108283996582

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00047111511230469

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00048995018005371

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00081920623779297

SELECT *
FROM `ospos_item_rates` AS `item_rates`
WHERE   (
`rate_name` LIKE '%%' ESCAPE '!'
OR  `rate_description` LIKE '%%' ESCAPE '!'
 )
AND `deleted` = 0
 LIMIT 25 
 Execution Time:0.00069499015808105

SELECT COUNT(item_rates.rate_id) as count
FROM `ospos_item_rates` AS `item_rates`
WHERE   (
`rate_name` LIKE '%%' ESCAPE '!'
OR  `rate_description` LIKE '%%' ESCAPE '!'
 )
AND `deleted` = 0 
 Execution Time:0.00071406364440918

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '84jtneeds4q2ogb2nhf6n8j47p2jl3bs'
AND `ip_address` = '::1' 
 Execution Time:0.0005650520324707

SELECT GET_LOCK('256a00f9b66460fbfddd80eba4cec3c9', 300) AS ci_session_lock 
 Execution Time:0.0003359317779541

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '84jtneeds4q2ogb2nhf6n8j47p2jl3bs'
AND `ip_address` = '::1' 
 Execution Time:0.00051188468933105

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00081300735473633

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0015468597412109

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.0010199546813965

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.001777172088623

SHOW TABLES FROM `ospos` 
 Execution Time:0.0061428546905518

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00063109397888184

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0014622211456299

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00078010559082031

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0018351078033447

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0008549690246582

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0007779598236084

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0016279220581055

UPDATE `ospos_item_rates` SET `deleted` = 1
WHERE `rate_id` IN('1', '2', '3') 
 Execution Time:0.0056250095367432

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '84jtneeds4q2ogb2nhf6n8j47p2jl3bs'
AND `ip_address` = '::1' 
 Execution Time:0.00060391426086426

SELECT GET_LOCK('256a00f9b66460fbfddd80eba4cec3c9', 300) AS ci_session_lock 
 Execution Time:0.00079679489135742

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '84jtneeds4q2ogb2nhf6n8j47p2jl3bs'
AND `ip_address` = '::1' 
 Execution Time:0.0011680126190186

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00062203407287598

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00078797340393066

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00055384635925293

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0010387897491455

SHOW TABLES FROM `ospos` 
 Execution Time:0.0058391094207764

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00089192390441895

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00086784362792969

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0029280185699463

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0012550354003906

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0049088001251221

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0023889541625977

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0007939338684082

SELECT *
FROM `ospos_item_rates` AS `item_rates`
WHERE   (
`rate_name` LIKE '%%' ESCAPE '!'
OR  `rate_description` LIKE '%%' ESCAPE '!'
 )
AND `deleted` = 0
 LIMIT 25 
 Execution Time:0.00057482719421387

SELECT COUNT(item_rates.rate_id) as count
FROM `ospos_item_rates` AS `item_rates`
WHERE   (
`rate_name` LIKE '%%' ESCAPE '!'
OR  `rate_description` LIKE '%%' ESCAPE '!'
 )
AND `deleted` = 0 
 Execution Time:0.00086593627929688

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '84jtneeds4q2ogb2nhf6n8j47p2jl3bs'
AND `ip_address` = '::1' 
 Execution Time:0.0019631385803223

SELECT GET_LOCK('256a00f9b66460fbfddd80eba4cec3c9', 300) AS ci_session_lock 
 Execution Time:0.00074100494384766

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '84jtneeds4q2ogb2nhf6n8j47p2jl3bs'
AND `ip_address` = '::1' 
 Execution Time:0.0009911060333252

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00071096420288086

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00064992904663086

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00093698501586914

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0014631748199463

SHOW TABLES FROM `ospos` 
 Execution Time:0.004486083984375

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00041699409484863

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0011959075927734

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00060200691223145

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00067591667175293

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00044012069702148

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00046992301940918

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00058817863464355

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00074577331542969

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0008699893951416

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '84jtneeds4q2ogb2nhf6n8j47p2jl3bs'
AND `ip_address` = '::1' 
 Execution Time:0.00063109397888184

SELECT GET_LOCK('256a00f9b66460fbfddd80eba4cec3c9', 300) AS ci_session_lock 
 Execution Time:0.00034999847412109

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '84jtneeds4q2ogb2nhf6n8j47p2jl3bs'
AND `ip_address` = '::1' 
 Execution Time:0.00063705444335938

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0015008449554443

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00079703330993652

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00063705444335938

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0018441677093506

SHOW TABLES FROM `ospos` 
 Execution Time:0.0061712265014648

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00059795379638672

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00064396858215332

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00076508522033691

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00082588195800781

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00049185752868652

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0013980865478516

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.001248836517334

SELECT *
FROM `ospos_item_rates` AS `item_rates`
WHERE   (
`rate_name` LIKE '%%' ESCAPE '!'
OR  `rate_description` LIKE '%%' ESCAPE '!'
 )
AND `deleted` = 0
 LIMIT 25 
 Execution Time:0.00059390068054199

SELECT COUNT(item_rates.rate_id) as count
FROM `ospos_item_rates` AS `item_rates`
WHERE   (
`rate_name` LIKE '%%' ESCAPE '!'
OR  `rate_description` LIKE '%%' ESCAPE '!'
 )
AND `deleted` = 0 
 Execution Time:0.00041103363037109

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '84jtneeds4q2ogb2nhf6n8j47p2jl3bs'
AND `ip_address` = '::1' 
 Execution Time:0.0012848377227783

SELECT GET_LOCK('256a00f9b66460fbfddd80eba4cec3c9', 300) AS ci_session_lock 
 Execution Time:0.00038695335388184

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '84jtneeds4q2ogb2nhf6n8j47p2jl3bs'
AND `ip_address` = '::1' 
 Execution Time:0.00052499771118164

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00067710876464844

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'expenses!_categories%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00051283836364746

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'expenses!_categories!_%' ESCAPE '!' 
 Execution Time:0.00042510032653809

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0012798309326172

SHOW TABLES FROM `ospos` 
 Execution Time:0.0032281875610352

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.001215934753418

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00074100494384766

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00070095062255859

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00056695938110352

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00045895576477051

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00041294097900391

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00074195861816406

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0006260871887207

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00061488151550293

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '84jtneeds4q2ogb2nhf6n8j47p2jl3bs'
AND `ip_address` = '::1' 
 Execution Time:0.00067019462585449

SELECT GET_LOCK('256a00f9b66460fbfddd80eba4cec3c9', 300) AS ci_session_lock 
 Execution Time:0.00032591819763184

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '84jtneeds4q2ogb2nhf6n8j47p2jl3bs'
AND `ip_address` = '::1' 
 Execution Time:0.00049591064453125

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00065398216247559

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'expenses!_categories%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00048303604125977

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'expenses!_categories!_%' ESCAPE '!' 
 Execution Time:0.00040602684020996

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0022950172424316

SHOW TABLES FROM `ospos` 
 Execution Time:0.0031528472900391

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.002795934677124

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0017569065093994

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00082612037658691

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00066089630126953

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0005040168762207

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00048303604125977

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00063610076904297

SELECT *
FROM `ospos_expense_categories` AS `expense_categories`
WHERE   (
`category_name` LIKE '%%' ESCAPE '!'
OR  `category_description` LIKE '%%' ESCAPE '!'
 )
AND `deleted` = 0
 LIMIT 25 
 Execution Time:0.0040569305419922

SELECT COUNT(expense_categories.expense_category_id) as count
FROM `ospos_expense_categories` AS `expense_categories`
WHERE   (
`category_name` LIKE '%%' ESCAPE '!'
OR  `category_description` LIKE '%%' ESCAPE '!'
 )
AND `deleted` = 0 
 Execution Time:0.0039191246032715

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '84jtneeds4q2ogb2nhf6n8j47p2jl3bs'
AND `ip_address` = '::1' 
 Execution Time:0.00088787078857422

SELECT GET_LOCK('256a00f9b66460fbfddd80eba4cec3c9', 300) AS ci_session_lock 
 Execution Time:0.00057387351989746

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '84jtneeds4q2ogb2nhf6n8j47p2jl3bs'
AND `ip_address` = '::1' 
 Execution Time:0.0030457973480225

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00077319145202637

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00088787078857422

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00053501129150391

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00094413757324219

SHOW TABLES FROM `ospos` 
 Execution Time:0.0031909942626953

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0004580020904541

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0010979175567627

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00059986114501953

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0005180835723877

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0004270076751709

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0005340576171875

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00078511238098145

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.001060962677002

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00061607360839844

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '84jtneeds4q2ogb2nhf6n8j47p2jl3bs'
AND `ip_address` = '::1' 
 Execution Time:0.000762939453125

SELECT GET_LOCK('256a00f9b66460fbfddd80eba4cec3c9', 300) AS ci_session_lock 
 Execution Time:0.00036191940307617

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '84jtneeds4q2ogb2nhf6n8j47p2jl3bs'
AND `ip_address` = '::1' 
 Execution Time:0.00049686431884766

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00066089630126953

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00057601928710938

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00038695335388184

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0012369155883789

SHOW TABLES FROM `ospos` 
 Execution Time:0.002971887588501

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00052309036254883

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00062394142150879

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00078916549682617

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0006859302520752

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00074195861816406

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00075912475585938

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00061798095703125

SELECT *
FROM `ospos_item_rates` AS `item_rates`
WHERE   (
`rate_name` LIKE '%%' ESCAPE '!'
OR  `rate_description` LIKE '%%' ESCAPE '!'
 )
AND `deleted` = 0
 LIMIT 25 
 Execution Time:0.00053691864013672

SELECT COUNT(item_rates.rate_id) as count
FROM `ospos_item_rates` AS `item_rates`
WHERE   (
`rate_name` LIKE '%%' ESCAPE '!'
OR  `rate_description` LIKE '%%' ESCAPE '!'
 )
AND `deleted` = 0 
 Execution Time:0.00043702125549316

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '84jtneeds4q2ogb2nhf6n8j47p2jl3bs'
AND `ip_address` = '::1' 
 Execution Time:0.00065398216247559

SELECT GET_LOCK('256a00f9b66460fbfddd80eba4cec3c9', 300) AS ci_session_lock 
 Execution Time:0.00037002563476562

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '84jtneeds4q2ogb2nhf6n8j47p2jl3bs'
AND `ip_address` = '::1' 
 Execution Time:0.00060701370239258

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00065398216247559

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00068402290344238

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00040888786315918

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00094199180603027

SHOW TABLES FROM `ospos` 
 Execution Time:0.0033929347991943

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.001410961151123

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00085306167602539

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00092101097106934

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0005638599395752

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00046396255493164

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0004580020904541

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00087308883666992

UPDATE `ospos_item_rates` SET `deleted` = 1
WHERE `rate_id` IN('1') 
 Execution Time:0.0057649612426758

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '84jtneeds4q2ogb2nhf6n8j47p2jl3bs'
AND `ip_address` = '::1' 
 Execution Time:0.0024349689483643

SELECT GET_LOCK('256a00f9b66460fbfddd80eba4cec3c9', 300) AS ci_session_lock 
 Execution Time:0.00047206878662109

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '84jtneeds4q2ogb2nhf6n8j47p2jl3bs'
AND `ip_address` = '::1' 
 Execution Time:0.00064992904663086

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00081300735473633

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00064396858215332

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.00055599212646484

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0011680126190186

SHOW TABLES FROM `ospos` 
 Execution Time:0.0057189464569092

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0010647773742676

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0029399394989014

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00074887275695801

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00068807601928711

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00061178207397461

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00054287910461426

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00075197219848633

SELECT *
FROM `ospos_item_rates` AS `item_rates`
WHERE   (
`rate_name` LIKE '%%' ESCAPE '!'
OR  `rate_description` LIKE '%%' ESCAPE '!'
 )
AND `deleted` = 0
 LIMIT 25 
 Execution Time:0.00099706649780273

SELECT COUNT(item_rates.rate_id) as count
FROM `ospos_item_rates` AS `item_rates`
WHERE   (
`rate_name` LIKE '%%' ESCAPE '!'
OR  `rate_description` LIKE '%%' ESCAPE '!'
 )
AND `deleted` = 0 
 Execution Time:0.00093913078308105

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '84jtneeds4q2ogb2nhf6n8j47p2jl3bs'
AND `ip_address` = '::1' 
 Execution Time:0.0010240077972412

SELECT GET_LOCK('256a00f9b66460fbfddd80eba4cec3c9', 300) AS ci_session_lock 
 Execution Time:0.00034308433532715

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '84jtneeds4q2ogb2nhf6n8j47p2jl3bs'
AND `ip_address` = '::1' 
 Execution Time:0.00046896934509277

UPDATE `ospos_sessions` SET `timestamp` = 1698417965, `data` = '__ci_last_regenerate|i:1698417965;person_id|s:1:\"1\";menu_group|s:6:\"office\";allow_temp_items|i:1;sale_id|i:-1;sales_location|s:1:\"1\";cash_rounding|i:0;cash_mode|i:0;sales_cart|a:0:{}sales_customer|i:-1;sales_mode|s:4:\"sale\";sales_payments|a:0:{}'
WHERE `id` = '84jtneeds4q2ogb2nhf6n8j47p2jl3bs'
AND `ip_address` = '::1' 
 Execution Time:0.0032148361206055

SELECT RELEASE_LOCK('256a00f9b66460fbfddd80eba4cec3c9') AS ci_session_lock 
 Execution Time:0.00028300285339355

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '84jtneeds4q2ogb2nhf6n8j47p2jl3bs'
AND `ip_address` = '::1' 
 Execution Time:0.00050902366638184

SELECT GET_LOCK('267ef1eea1750ed729f633783b79912d', 300) AS ci_session_lock 
 Execution Time:0.00025105476379395

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'uajtkqlqq3eg386upduqb4t8amk71dfk'
AND `ip_address` = '::1' 
 Execution Time:0.0004880428314209

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00056719779968262

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0014238357543945

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.0019481182098389

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.001270055770874

SHOW TABLES FROM `ospos` 
 Execution Time:0.0046658515930176

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00044703483581543

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00067782402038574

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010039806365967

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0050020217895508

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00065898895263672

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00062394142150879

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00078511238098145

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00069499015808105

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00071001052856445

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'uajtkqlqq3eg386upduqb4t8amk71dfk'
AND `ip_address` = '::1' 
 Execution Time:0.00093984603881836

SELECT GET_LOCK('267ef1eea1750ed729f633783b79912d', 300) AS ci_session_lock 
 Execution Time:0.0011100769042969

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'uajtkqlqq3eg386upduqb4t8amk71dfk'
AND `ip_address` = '::1' 
 Execution Time:0.0017681121826172

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00084900856018066

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'item!_rates%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00072503089904785

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'item!_rates!_%' ESCAPE '!' 
 Execution Time:0.0010440349578857

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0020051002502441

SHOW TABLES FROM `ospos` 
 Execution Time:0.0068418979644775

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00046896934509277

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00075006484985352

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00062823295593262

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00060391426086426

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00051212310791016

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00058293342590332

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00063991546630859

SELECT *
FROM `ospos_item_rates` AS `item_rates`
WHERE   (
`rate_name` LIKE '%%' ESCAPE '!'
OR  `rate_description` LIKE '%%' ESCAPE '!'
 )
AND `deleted` = 0
 LIMIT 25 
 Execution Time:0.00066208839416504

SELECT COUNT(item_rates.rate_id) as count
FROM `ospos_item_rates` AS `item_rates`
WHERE   (
`rate_name` LIKE '%%' ESCAPE '!'
OR  `rate_description` LIKE '%%' ESCAPE '!'
 )
AND `deleted` = 0 
 Execution Time:0.00046014785766602

