SELECT GET_LOCK('2ed08a3795789ea19dcac7bc07f9402e', 300) AS ci_session_lock 
 Execution Time:0.0012779235839844

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'rrthpi2o75gl964efa0o0l1i6lug27qg'
AND `ip_address` = '::1' 
 Execution Time:0.16960000991821

SHOW TABLES FROM `ospos` 
 Execution Time:0.048424005508423

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.46847200393677

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.63872003555298

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'company_logo'
 LIMIT 1 
 Execution Time:0.02484393119812

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0051860809326172

SELECT GET_LOCK('ae12b7b0fb69421c49b0d2330e4fdba0', 300) AS ci_session_lock 
 Execution Time:0.0020780563354492

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '8c13cb2bu1igod0kikns0uk91j0hlnvk'
AND `ip_address` = '::1' 
 Execution Time:0.014702796936035

SHOW TABLES FROM `ospos` 
 Execution Time:0.061676979064941

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0033068656921387

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0015549659729004

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'company_logo'
 LIMIT 1 
 Execution Time:0.10213398933411

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00044918060302734

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '8c13cb2bu1igod0kikns0uk91j0hlnvk'
AND `ip_address` = '::1' 
 Execution Time:0.00066995620727539

SELECT GET_LOCK('ae12b7b0fb69421c49b0d2330e4fdba0', 300) AS ci_session_lock 
 Execution Time:0.00045394897460938

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '8c13cb2bu1igod0kikns0uk91j0hlnvk'
AND `ip_address` = '::1' 
 Execution Time:0.0006110668182373

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:1.293380022049

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE '%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.07017183303833

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.2877299785614

SHOW TABLES FROM `ospos` 
 Execution Time:0.0073788166046143

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00067400932312012

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00094699859619141

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.050875902175903

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.04256010055542

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.013399124145508

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.02243709564209

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.014573097229004

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '8c13cb2bu1igod0kikns0uk91j0hlnvk'
AND `ip_address` = '::1' 
 Execution Time:0.00089788436889648

SELECT GET_LOCK('ae12b7b0fb69421c49b0d2330e4fdba0', 300) AS ci_session_lock 
 Execution Time:0.00040912628173828

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '8c13cb2bu1igod0kikns0uk91j0hlnvk'
AND `ip_address` = '::1' 
 Execution Time:0.00063800811767578

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0013089179992676

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00364089012146

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0012249946594238

SHOW TABLES FROM `ospos` 
 Execution Time:0.0036838054656982

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0004880428314209

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00060796737670898

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0006721019744873

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00072407722473145

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00052189826965332

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00086808204650879

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0014421939849854

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1' 
 Execution Time:0.00070500373840332

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.0014350414276123

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_receivings'
 LIMIT 1 
 Execution Time:0.00050806999206543

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_customers'
 LIMIT 1 
 Execution Time:0.00043988227844238

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_discounts'
 LIMIT 1 
 Execution Time:0.0017859935760498

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.00091385841369629

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_suppliers'
 LIMIT 1 
 Execution Time:0.0005028247833252

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_suppliersgls'
 LIMIT 1 
 Execution Time:0.00046896934509277

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.00047492980957031

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '8c13cb2bu1igod0kikns0uk91j0hlnvk'
AND `ip_address` = '::1' 
 Execution Time:0.00069499015808105

SELECT GET_LOCK('ae12b7b0fb69421c49b0d2330e4fdba0', 300) AS ci_session_lock 
 Execution Time:0.00036883354187012

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '8c13cb2bu1igod0kikns0uk91j0hlnvk'
AND `ip_address` = '::1' 
 Execution Time:0.00058102607727051

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.022159099578857

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.001276969909668

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0051391124725342

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00064396858215332

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.00049805641174316

SHOW TABLES FROM `ospos` 
 Execution Time:0.0066239833831787

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00043892860412598

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00058102607727051

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00092720985412598

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0007469654083252

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00063419342041016

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00076389312744141

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00068306922912598

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'items%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.29063701629639

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_suppliers`.`person_id` = `ospos_people`.`person_id`
WHERE `category` = 0
AND `deleted` = 0
ORDER BY `company_name` ASC 
 Execution Time:0.025506019592285

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'of42n5uik3jp976e3i0rbrsu2fqcgv7a'
AND `ip_address` = '::1' 
 Execution Time:0.0018620491027832

SELECT GET_LOCK('0588c4b355b18d6cab2d1b37839e1367', 300) AS ci_session_lock 
 Execution Time:0.00038909912109375

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'of42n5uik3jp976e3i0rbrsu2fqcgv7a'
AND `ip_address` = '::1' 
 Execution Time:0.00053811073303223

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.072221040725708

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.024857997894287

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.062896013259888

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.070359945297241

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.00065183639526367

SHOW TABLES FROM `ospos` 
 Execution Time:0.086172103881836

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.05121898651123

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.047357082366943

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.030325889587402

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.010346174240112

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.003093957901001

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0027511119842529

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.015470027923584

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'items%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.0013809204101562

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_suppliers`.`person_id` = `ospos_people`.`person_id`
WHERE `category` = 0
AND `deleted` = 0
ORDER BY `company_name` ASC 
 Execution Time:0.0016148090362549

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'of42n5uik3jp976e3i0rbrsu2fqcgv7a'
AND `ip_address` = '::1' 
 Execution Time:0.00063800811767578

SELECT GET_LOCK('0588c4b355b18d6cab2d1b37839e1367', 300) AS ci_session_lock 
 Execution Time:0.00045108795166016

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'of42n5uik3jp976e3i0rbrsu2fqcgv7a'
AND `ip_address` = '::1' 
 Execution Time:0.00074505805969238

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00211501121521

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0009918212890625

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0029189586639404

SHOW TABLES FROM `ospos` 
 Execution Time:0.0038790702819824

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00060391426086426

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0009918212890625

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0017518997192383

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00056695938110352

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00080990791320801

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00055193901062012

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00065088272094727

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1' 
 Execution Time:0.001176118850708

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00058197975158691

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_receivings'
 LIMIT 1 
 Execution Time:0.00040292739868164

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_customers'
 LIMIT 1 
 Execution Time:0.00040888786315918

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_discounts'
 LIMIT 1 
 Execution Time:0.00049996376037598

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.00038385391235352

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_suppliers'
 LIMIT 1 
 Execution Time:0.0005640983581543

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_suppliersgls'
 LIMIT 1 
 Execution Time:0.0016441345214844

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.00097894668579102

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'of42n5uik3jp976e3i0rbrsu2fqcgv7a'
AND `ip_address` = '::1' 
 Execution Time:0.00089693069458008

SELECT GET_LOCK('0588c4b355b18d6cab2d1b37839e1367', 300) AS ci_session_lock 
 Execution Time:0.00042200088500977

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'of42n5uik3jp976e3i0rbrsu2fqcgv7a'
AND `ip_address` = '::1' 
 Execution Time:0.00072789192199707

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010080337524414

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0026001930236816

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0010700225830078

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00065112113952637

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.00061392784118652

SHOW TABLES FROM `ospos` 
 Execution Time:0.0068850517272949

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00040507316589355

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00086092948913574

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.000640869140625

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00068998336791992

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0006861686706543

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0006101131439209

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00056695938110352

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'items%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.0009307861328125

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_suppliers`.`person_id` = `ospos_people`.`person_id`
WHERE `category` = 0
AND `deleted` = 0
ORDER BY `company_name` ASC 
 Execution Time:0.000823974609375

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'q5885f642sf57aq34tovbn30g5jjsaa4'
AND `ip_address` = '::1' 
 Execution Time:0.00069594383239746

SELECT GET_LOCK('b00219495660b5a8c7f24a986429d902', 300) AS ci_session_lock 
 Execution Time:0.00037598609924316

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'q5885f642sf57aq34tovbn30g5jjsaa4'
AND `ip_address` = '::1' 
 Execution Time:0.0005640983581543

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0036180019378662

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0013918876647949

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0014679431915283

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0005650520324707

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.00046205520629883

SHOW TABLES FROM `ospos` 
 Execution Time:0.0046579837799072

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0005950927734375

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0007328987121582

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00086498260498047

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00087809562683105

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00061583518981934

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00086498260498047

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00088810920715332

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'items%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.0013999938964844

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_suppliers`.`person_id` = `ospos_people`.`person_id`
WHERE `category` = 0
AND `deleted` = 0
ORDER BY `company_name` ASC 
 Execution Time:0.0011088848114014

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'q5885f642sf57aq34tovbn30g5jjsaa4'
AND `ip_address` = '::1' 
 Execution Time:0.00067400932312012

SELECT GET_LOCK('b00219495660b5a8c7f24a986429d902', 300) AS ci_session_lock 
 Execution Time:0.00043988227844238

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'q5885f642sf57aq34tovbn30g5jjsaa4'
AND `ip_address` = '::1' 
 Execution Time:0.00059390068054199

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00065302848815918

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00066685676574707

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0010910034179688

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0004880428314209

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.00034594535827637

SHOW TABLES FROM `ospos` 
 Execution Time:0.0041501522064209

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00042319297790527

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00052094459533691

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00665283203125

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0014657974243164

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00044393539428711

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00046396255493164

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0007479190826416

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'items%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.0034270286560059

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_suppliers`.`person_id` = `ospos_people`.`person_id`
WHERE `category` = 0
AND `deleted` = 0
ORDER BY `company_name` ASC 
 Execution Time:0.00094890594482422

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'q5885f642sf57aq34tovbn30g5jjsaa4'
AND `ip_address` = '::1' 
 Execution Time:0.00064301490783691

SELECT GET_LOCK('b00219495660b5a8c7f24a986429d902', 300) AS ci_session_lock 
 Execution Time:0.00042080879211426

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'q5885f642sf57aq34tovbn30g5jjsaa4'
AND `ip_address` = '::1' 
 Execution Time:0.00054693222045898

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00069284439086914

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00073099136352539

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.001194953918457

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0006248950958252

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.00043606758117676

SHOW TABLES FROM `ospos` 
 Execution Time:0.0043530464172363

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0005500316619873

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0010731220245361

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00068402290344238

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00057411193847656

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00065493583679199

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00054311752319336

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00064611434936523

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'items%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.0014848709106445

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_suppliers`.`person_id` = `ospos_people`.`person_id`
WHERE `category` = 0
AND `deleted` = 0
ORDER BY `company_name` ASC 
 Execution Time:0.00089406967163086

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'q5885f642sf57aq34tovbn30g5jjsaa4'
AND `ip_address` = '::1' 
 Execution Time:0.0042250156402588

SELECT GET_LOCK('b00219495660b5a8c7f24a986429d902', 300) AS ci_session_lock 
 Execution Time:0.00038814544677734

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'q5885f642sf57aq34tovbn30g5jjsaa4'
AND `ip_address` = '::1' 
 Execution Time:0.00054097175598145

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00076699256896973

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0006709098815918

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0012271404266357

SHOW TABLES FROM `ospos` 
 Execution Time:0.0045781135559082

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0011849403381348

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0025300979614258

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099802017211914

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00096607208251953

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00069189071655273

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00084400177001953

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00067305564880371

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1' 
 Execution Time:0.0016400814056396

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00073385238647461

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_receivings'
 LIMIT 1 
 Execution Time:0.00085186958312988

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_customers'
 LIMIT 1 
 Execution Time:0.0004119873046875

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_discounts'
 LIMIT 1 
 Execution Time:0.00067400932312012

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.00040817260742188

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_suppliers'
 LIMIT 1 
 Execution Time:0.00075793266296387

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_suppliersgls'
 LIMIT 1 
 Execution Time:0.00036191940307617

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.0006721019744873

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'q5885f642sf57aq34tovbn30g5jjsaa4'
AND `ip_address` = '::1' 
 Execution Time:0.0010888576507568

SELECT GET_LOCK('b00219495660b5a8c7f24a986429d902', 300) AS ci_session_lock 
 Execution Time:0.00044107437133789

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'q5885f642sf57aq34tovbn30g5jjsaa4'
AND `ip_address` = '::1' 
 Execution Time:0.00059390068054199

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00072598457336426

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0014071464538574

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0016639232635498

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00073909759521484

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.00045490264892578

SHOW TABLES FROM `ospos` 
 Execution Time:0.0023961067199707

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00052618980407715

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00059819221496582

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010750293731689

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0007328987121582

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00071406364440918

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00086212158203125

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00062084197998047

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'items%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.0010678768157959

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_suppliers`.`person_id` = `ospos_people`.`person_id`
WHERE `category` = 0
AND `deleted` = 0
ORDER BY `company_name` ASC 
 Execution Time:0.00092482566833496

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'q5885f642sf57aq34tovbn30g5jjsaa4'
AND `ip_address` = '::1' 
 Execution Time:0.0010020732879639

SELECT GET_LOCK('b00219495660b5a8c7f24a986429d902', 300) AS ci_session_lock 
 Execution Time:0.00072789192199707

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'q5885f642sf57aq34tovbn30g5jjsaa4'
AND `ip_address` = '::1' 
 Execution Time:0.0004880428314209

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.033752918243408

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.008296012878418

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.034714937210083

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.015428066253662

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.031492948532104

SHOW TABLES FROM `ospos` 
 Execution Time:0.0080699920654297

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00047588348388672

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0009608268737793

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0021181106567383

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00064802169799805

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00060105323791504

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0007929801940918

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00079488754272461

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'items%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.003277063369751

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_suppliers`.`person_id` = `ospos_people`.`person_id`
WHERE `category` = 0
AND `deleted` = 0
ORDER BY `company_name` ASC 
 Execution Time:0.0018179416656494

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'q5885f642sf57aq34tovbn30g5jjsaa4'
AND `ip_address` = '::1' 
 Execution Time:0.00065302848815918

SELECT GET_LOCK('b00219495660b5a8c7f24a986429d902', 300) AS ci_session_lock 
 Execution Time:0.00043082237243652

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'q5885f642sf57aq34tovbn30g5jjsaa4'
AND `ip_address` = '::1' 
 Execution Time:0.00061607360839844

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.011817932128906

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.013086795806885

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0022478103637695

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.00053501129150391

SHOW TABLES FROM `ospos` 
 Execution Time:0.0048809051513672

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0022850036621094

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0015819072723389

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0012960433959961

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010221004486084

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0058770179748535

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0007939338684082

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.086704969406128

SELECT `items`.`name` AS `name`, `items`.`item_number`, `items`.`category`, `item_quantities`.`quantity`, (item_quantities.quantity * items.qty_per_pack) as low_sell_quantity, `items`.`reorder_level`, `stock_locations`.`location_name`, `items`.`cost_price`, `items`.`unit_price`, (items.cost_price * item_quantities.quantity) AS sub_total_value
FROM `ospos_items` AS `items`
JOIN `ospos_item_quantities` AS `item_quantities` ON `items`.`item_id` = `item_quantities`.`item_id`
JOIN `ospos_stock_locations` AS `stock_locations` ON `item_quantities`.`location_id` = `stock_locations`.`location_id`
WHERE `items`.`deleted` = 0
AND `items`.`stock_type` = 0
AND `stock_locations`.`deleted` = 0
AND `items`.`supplier_id` = '5'
ORDER BY `items`.`name`, `items`.`qty_per_pack` 
 Execution Time:0.058583974838257

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0059118270874023

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.02905797958374

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'q5885f642sf57aq34tovbn30g5jjsaa4'
AND `ip_address` = '::1' 
 Execution Time:0.0010139942169189

SELECT GET_LOCK('b00219495660b5a8c7f24a986429d902', 300) AS ci_session_lock 
 Execution Time:0.00095105171203613

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'q5885f642sf57aq34tovbn30g5jjsaa4'
AND `ip_address` = '::1' 
 Execution Time:0.00080990791320801

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0092041492462158

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00080013275146484

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0010581016540527

SHOW TABLES FROM `ospos` 
 Execution Time:0.0049569606781006

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00041317939758301

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00080394744873047

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0024518966674805

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0009620189666748

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00056600570678711

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0017130374908447

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0042610168457031

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1' 
 Execution Time:0.0010349750518799

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.0024750232696533

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_receivings'
 LIMIT 1 
 Execution Time:0.0015969276428223

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_customers'
 LIMIT 1 
 Execution Time:0.001352071762085

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_discounts'
 LIMIT 1 
 Execution Time:0.0051820278167725

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.0010859966278076

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_suppliers'
 LIMIT 1 
 Execution Time:0.0027790069580078

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_suppliersgls'
 LIMIT 1 
 Execution Time:0.00099086761474609

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.0017130374908447

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'q5885f642sf57aq34tovbn30g5jjsaa4'
AND `ip_address` = '::1' 
 Execution Time:0.0052409172058105

SELECT GET_LOCK('b00219495660b5a8c7f24a986429d902', 300) AS ci_session_lock 
 Execution Time:0.00033712387084961

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'q5885f642sf57aq34tovbn30g5jjsaa4'
AND `ip_address` = '::1' 
 Execution Time:0.00049114227294922

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0072829723358154

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00074291229248047

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0013928413391113

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00058484077453613

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.0003509521484375

SHOW TABLES FROM `ospos` 
 Execution Time:0.0041179656982422

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00048708915710449

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00079894065856934

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0032541751861572

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00068783760070801

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0021569728851318

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0035128593444824

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00086688995361328

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'items%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.0027928352355957

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_suppliers`.`person_id` = `ospos_people`.`person_id`
WHERE `category` = 0
AND `deleted` = 0
ORDER BY `company_name` ASC 
 Execution Time:0.0016570091247559

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'q5885f642sf57aq34tovbn30g5jjsaa4'
AND `ip_address` = '::1' 
 Execution Time:0.0012638568878174

SELECT GET_LOCK('b00219495660b5a8c7f24a986429d902', 300) AS ci_session_lock 
 Execution Time:0.00049400329589844

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'q5885f642sf57aq34tovbn30g5jjsaa4'
AND `ip_address` = '::1' 
 Execution Time:0.00050497055053711

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010929107666016

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0007481575012207

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0011651515960693

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010569095611572

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.00041699409484863

SHOW TABLES FROM `ospos` 
 Execution Time:0.0058588981628418

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0026571750640869

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0018188953399658

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0018050670623779

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010290145874023

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00095796585083008

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00087594985961914

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00081586837768555

SELECT `items`.`name` AS `name`, `items`.`item_number`, `items`.`category`, `item_quantities`.`quantity`, (item_quantities.quantity * items.qty_per_pack) as low_sell_quantity, `items`.`reorder_level`, `stock_locations`.`location_name`, `items`.`cost_price`, `items`.`unit_price`, (items.cost_price * item_quantities.quantity) AS sub_total_value
FROM `ospos_items` AS `items`
JOIN `ospos_item_quantities` AS `item_quantities` ON `items`.`item_id` = `item_quantities`.`item_id`
JOIN `ospos_stock_locations` AS `stock_locations` ON `item_quantities`.`location_id` = `stock_locations`.`location_id`
WHERE `items`.`deleted` = 0
AND `items`.`stock_type` = 0
AND `stock_locations`.`deleted` = 0
AND `items`.`supplier_id` = '4'
ORDER BY `items`.`name`, `items`.`qty_per_pack` 
 Execution Time:0.00092196464538574

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0005950927734375

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00087809562683105

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'q5885f642sf57aq34tovbn30g5jjsaa4'
AND `ip_address` = '::1' 
 Execution Time:0.027295112609863

SELECT GET_LOCK('b00219495660b5a8c7f24a986429d902', 300) AS ci_session_lock 
 Execution Time:0.009490966796875

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'q5885f642sf57aq34tovbn30g5jjsaa4'
AND `ip_address` = '::1' 
 Execution Time:0.00088596343994141

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.021417856216431

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0011799335479736

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0012600421905518

SHOW TABLES FROM `ospos` 
 Execution Time:0.0051369667053223

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00052094459533691

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00099897384643555

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010437965393066

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0080459117889404

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00041985511779785

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0005791187286377

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00064492225646973

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1' 
 Execution Time:0.0096631050109863

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.0021600723266602

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_receivings'
 LIMIT 1 
 Execution Time:0.0013880729675293

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_customers'
 LIMIT 1 
 Execution Time:0.00054216384887695

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_discounts'
 LIMIT 1 
 Execution Time:0.00092792510986328

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.0059399604797363

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_suppliers'
 LIMIT 1 
 Execution Time:0.0015828609466553

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_suppliersgls'
 LIMIT 1 
 Execution Time:0.0014278888702393

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.0010149478912354

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'q5885f642sf57aq34tovbn30g5jjsaa4'
AND `ip_address` = '::1' 
 Execution Time:0.00069189071655273

SELECT GET_LOCK('b00219495660b5a8c7f24a986429d902', 300) AS ci_session_lock 
 Execution Time:0.00035500526428223

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'q5885f642sf57aq34tovbn30g5jjsaa4'
AND `ip_address` = '::1' 
 Execution Time:0.00069713592529297

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00068306922912598

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00061893463134766

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00098490715026855

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00056886672973633

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.00037217140197754

SHOW TABLES FROM `ospos` 
 Execution Time:0.003964900970459

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00047087669372559

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0013580322265625

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00069594383239746

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00050806999206543

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00063991546630859

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00090503692626953

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0015108585357666

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'items%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.0022571086883545

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_suppliers`.`person_id` = `ospos_people`.`person_id`
WHERE `category` = 0
AND `deleted` = 0
ORDER BY `company_name` ASC 
 Execution Time:0.00076198577880859

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'q5885f642sf57aq34tovbn30g5jjsaa4'
AND `ip_address` = '::1' 
 Execution Time:0.012452125549316

SELECT GET_LOCK('b00219495660b5a8c7f24a986429d902', 300) AS ci_session_lock 
 Execution Time:0.019248008728027

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'q5885f642sf57aq34tovbn30g5jjsaa4'
AND `ip_address` = '::1' 
 Execution Time:0.0005180835723877

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.027862071990967

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.003896951675415

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00097298622131348

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00045895576477051

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.00033712387084961

SHOW TABLES FROM `ospos` 
 Execution Time:0.0033819675445557

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00040411949157715

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0005030632019043

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00054502487182617

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00057196617126465

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00046086311340332

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00038909912109375

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00054717063903809

SELECT `items`.`name` AS `name`, `items`.`item_number`, `items`.`category`, `item_quantities`.`quantity`, (item_quantities.quantity * items.qty_per_pack) as low_sell_quantity, `items`.`reorder_level`, `stock_locations`.`location_name`, `items`.`cost_price`, `items`.`unit_price`, (items.cost_price * item_quantities.quantity) AS sub_total_value
FROM `ospos_items` AS `items`
JOIN `ospos_item_quantities` AS `item_quantities` ON `items`.`item_id` = `item_quantities`.`item_id`
JOIN `ospos_stock_locations` AS `stock_locations` ON `item_quantities`.`location_id` = `stock_locations`.`location_id`
WHERE `items`.`deleted` = 0
AND `items`.`stock_type` = 0
AND `stock_locations`.`deleted` = 0
AND `items`.`supplier_id` = '0'
ORDER BY `items`.`name`, `items`.`qty_per_pack` 
 Execution Time:0.0033950805664062

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.016189813613892

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0081641674041748

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'q5885f642sf57aq34tovbn30g5jjsaa4'
AND `ip_address` = '::1' 
 Execution Time:0.0050981044769287

SELECT GET_LOCK('b00219495660b5a8c7f24a986429d902', 300) AS ci_session_lock 
 Execution Time:0.0011320114135742

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'q5885f642sf57aq34tovbn30g5jjsaa4'
AND `ip_address` = '::1' 
 Execution Time:0.00058102607727051

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.01134204864502

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.023953914642334

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0011019706726074

SHOW TABLES FROM `ospos` 
 Execution Time:0.004403829574585

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.01210880279541

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00071501731872559

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0017790794372559

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0012838840484619

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010700225830078

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0022659301757812

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00083208084106445

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1' 
 Execution Time:0.00065493583679199

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00069999694824219

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_receivings'
 LIMIT 1 
 Execution Time:0.0020780563354492

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_customers'
 LIMIT 1 
 Execution Time:0.001244068145752

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_discounts'
 LIMIT 1 
 Execution Time:0.00085091590881348

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.0012438297271729

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_suppliers'
 LIMIT 1 
 Execution Time:0.00058388710021973

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_suppliersgls'
 LIMIT 1 
 Execution Time:0.00087404251098633

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.00081706047058105

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'q5885f642sf57aq34tovbn30g5jjsaa4'
AND `ip_address` = '::1' 
 Execution Time:0.0007169246673584

SELECT GET_LOCK('b00219495660b5a8c7f24a986429d902', 300) AS ci_session_lock 
 Execution Time:0.00036382675170898

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'q5885f642sf57aq34tovbn30g5jjsaa4'
AND `ip_address` = '::1' 
 Execution Time:0.00046706199645996

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.031863927841187

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0096900463104248

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0022459030151367

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00085687637329102

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.00042390823364258

SHOW TABLES FROM `ospos` 
 Execution Time:0.0076990127563477

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00070309638977051

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0020298957824707

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.011661767959595

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.001755952835083

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00085091590881348

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0012309551239014

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0059759616851807

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'items%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.0029799938201904

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_suppliers`.`person_id` = `ospos_people`.`person_id`
WHERE `category` = 0
AND `deleted` = 0
ORDER BY `company_name` ASC 
 Execution Time:0.0012338161468506

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'q5885f642sf57aq34tovbn30g5jjsaa4'
AND `ip_address` = '::1' 
 Execution Time:0.0026519298553467

SELECT GET_LOCK('b00219495660b5a8c7f24a986429d902', 300) AS ci_session_lock 
 Execution Time:0.005169153213501

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'q5885f642sf57aq34tovbn30g5jjsaa4'
AND `ip_address` = '::1' 
 Execution Time:0.0020310878753662

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0056109428405762

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.015217065811157

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0011107921600342

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00076198577880859

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.00056910514831543

SHOW TABLES FROM `ospos` 
 Execution Time:0.0046288967132568

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00051593780517578

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00069093704223633

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0078551769256592

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0031919479370117

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0023810863494873

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0007321834564209

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0018401145935059

SELECT `items`.`name` AS `name`, `items`.`item_number`, `items`.`category`, `item_quantities`.`quantity`, (item_quantities.quantity * items.qty_per_pack) as low_sell_quantity, `items`.`reorder_level`, `stock_locations`.`location_name`, `items`.`cost_price`, `items`.`unit_price`, (items.cost_price * item_quantities.quantity) AS sub_total_value
FROM `ospos_items` AS `items`
JOIN `ospos_item_quantities` AS `item_quantities` ON `items`.`item_id` = `item_quantities`.`item_id`
JOIN `ospos_stock_locations` AS `stock_locations` ON `item_quantities`.`location_id` = `stock_locations`.`location_id`
WHERE `items`.`deleted` = 0
AND `items`.`stock_type` = 0
AND `stock_locations`.`deleted` = 0
ORDER BY `items`.`name`, `items`.`qty_per_pack` 
 Execution Time:0.007843017578125

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0027670860290527

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0022189617156982

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'q5885f642sf57aq34tovbn30g5jjsaa4'
AND `ip_address` = '::1' 
 Execution Time:0.0011310577392578

SELECT GET_LOCK('b00219495660b5a8c7f24a986429d902', 300) AS ci_session_lock 
 Execution Time:0.00034499168395996

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'q5885f642sf57aq34tovbn30g5jjsaa4'
AND `ip_address` = '::1' 
 Execution Time:0.00051307678222656

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.016983032226562

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.017693996429443

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.015995025634766

SHOW TABLES FROM `ospos` 
 Execution Time:0.015943050384521

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0052769184112549

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0036940574645996

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.02171802520752

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0049228668212891

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0036628246307373

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0022919178009033

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.028463125228882

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1' 
 Execution Time:0.041604042053223

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.018640041351318

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_receivings'
 LIMIT 1 
 Execution Time:0.051883935928345

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_customers'
 LIMIT 1 
 Execution Time:0.054155111312866

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_discounts'
 LIMIT 1 
 Execution Time:0.025076866149902

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.040382146835327

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_suppliers'
 LIMIT 1 
 Execution Time:0.049463033676147

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_suppliersgls'
 LIMIT 1 
 Execution Time:0.015990018844604

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.030895948410034

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'q5885f642sf57aq34tovbn30g5jjsaa4'
AND `ip_address` = '::1' 
 Execution Time:0.00084209442138672

SELECT GET_LOCK('b00219495660b5a8c7f24a986429d902', 300) AS ci_session_lock 
 Execution Time:0.0011827945709229

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'q5885f642sf57aq34tovbn30g5jjsaa4'
AND `ip_address` = '::1' 
 Execution Time:0.0013809204101562

UPDATE `ospos_sessions` SET `timestamp` = 1698743211, `data` = '__ci_last_regenerate|i:1698743211;person_id|s:1:\"1\";menu_group|s:4:\"home\";'
WHERE `id` = 'q5885f642sf57aq34tovbn30g5jjsaa4'
AND `ip_address` = '::1' 
 Execution Time:0.0043528079986572

SELECT RELEASE_LOCK('b00219495660b5a8c7f24a986429d902') AS ci_session_lock 
 Execution Time:0.00034308433532715

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'q5885f642sf57aq34tovbn30g5jjsaa4'
AND `ip_address` = '::1' 
 Execution Time:0.004896879196167

SELECT GET_LOCK('7e8e883b413d0b148af7ffc7f8798c4d', 300) AS ci_session_lock 
 Execution Time:0.00038695335388184

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'pks1v248oke054r8ot9hrav14ttuc6c8'
AND `ip_address` = '::1' 
 Execution Time:0.00054788589477539

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00078415870666504

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00069904327392578

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0009760856628418

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00066494941711426

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.00063705444335938

SHOW TABLES FROM `ospos` 
 Execution Time:0.036639928817749

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0013389587402344

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0022950172424316

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0011789798736572

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0011699199676514

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.030131816864014

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.03684401512146

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.012131214141846

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'items%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.0066909790039062

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_suppliers`.`person_id` = `ospos_people`.`person_id`
WHERE `category` = 0
AND `deleted` = 0
ORDER BY `company_name` ASC 
 Execution Time:0.0014660358428955

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'pks1v248oke054r8ot9hrav14ttuc6c8'
AND `ip_address` = '::1' 
 Execution Time:0.00066804885864258

SELECT GET_LOCK('7e8e883b413d0b148af7ffc7f8798c4d', 300) AS ci_session_lock 
 Execution Time:0.0004570484161377

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'pks1v248oke054r8ot9hrav14ttuc6c8'
AND `ip_address` = '::1' 
 Execution Time:0.0006101131439209

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0044820308685303

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00085306167602539

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0013420581817627

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00070500373840332

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.00051403045654297

SHOW TABLES FROM `ospos` 
 Execution Time:0.004396915435791

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00044393539428711

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00061416625976562

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00081801414489746

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0014028549194336

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00078296661376953

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010051727294922

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00088596343994141

SELECT `items`.`name` AS `name`, `items`.`item_number`, `items`.`category`, `item_quantities`.`quantity`, (item_quantities.quantity * items.qty_per_pack) as low_sell_quantity, `items`.`reorder_level`, `stock_locations`.`location_name`, `items`.`cost_price`, `items`.`unit_price`, (items.cost_price * item_quantities.quantity) AS sub_total_value
FROM `ospos_items` AS `items`
JOIN `ospos_item_quantities` AS `item_quantities` ON `items`.`item_id` = `item_quantities`.`item_id`
JOIN `ospos_stock_locations` AS `stock_locations` ON `item_quantities`.`location_id` = `stock_locations`.`location_id`
WHERE `items`.`deleted` = 0
AND `items`.`stock_type` = 0
AND `stock_locations`.`deleted` = 0
AND `items`.`supplier_id` = '5'
ORDER BY `items`.`name`, `items`.`qty_per_pack` 
 Execution Time:0.0017039775848389

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00059890747070312

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00062394142150879

