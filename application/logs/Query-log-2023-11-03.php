SELECT GET_LOCK('7413dc3b302a51fa9f0dcfbaa35550d0', 300) AS ci_session_lock 
 Execution Time:0.00037693977355957

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '6h8gg4tluplf3am87k11p75jffvkp3vb'
AND `ip_address` = '::1' 
 Execution Time:0.12889289855957

SHOW TABLES FROM `ospos` 
 Execution Time:0.014629125595093

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.017277956008911

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.014845132827759

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'company_logo'
 LIMIT 1 
 Execution Time:0.0014629364013672

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.010319948196411

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '6h8gg4tluplf3am87k11p75jffvkp3vb'
AND `ip_address` = '::1' 
 Execution Time:0.00049996376037598

SELECT GET_LOCK('7413dc3b302a51fa9f0dcfbaa35550d0', 300) AS ci_session_lock 
 Execution Time:0.00028896331787109

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '6h8gg4tluplf3am87k11p75jffvkp3vb'
AND `ip_address` = '::1' 
 Execution Time:0.00048398971557617

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.027547121047974

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE '%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0097880363464355

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.097651958465576

SHOW TABLES FROM `ospos` 
 Execution Time:0.0035469532012939

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0003819465637207

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00053310394287109

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.011549949645996

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00058698654174805

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00055789947509766

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00046396255493164

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0070629119873047

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '6h8gg4tluplf3am87k11p75jffvkp3vb'
AND `ip_address` = '::1' 
 Execution Time:0.0007481575012207

SELECT GET_LOCK('7413dc3b302a51fa9f0dcfbaa35550d0', 300) AS ci_session_lock 
 Execution Time:0.00056910514831543

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '6h8gg4tluplf3am87k11p75jffvkp3vb'
AND `ip_address` = '::1' 
 Execution Time:0.00062799453735352

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00071191787719727

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00060486793518066

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.001021146774292

SHOW TABLES FROM `ospos` 
 Execution Time:0.0033059120178223

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00043487548828125

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00058197975158691

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00062203407287598

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00072598457336426

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00057792663574219

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00076889991760254

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00058507919311523

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1' 
 Execution Time:0.00057101249694824

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00058889389038086

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_receivings'
 LIMIT 1 
 Execution Time:0.00046586990356445

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_customers'
 LIMIT 1 
 Execution Time:0.00064992904663086

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_discounts'
 LIMIT 1 
 Execution Time:0.0003209114074707

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.00064897537231445

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_suppliers'
 LIMIT 1 
 Execution Time:0.00029516220092773

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_suppliersgls'
 LIMIT 1 
 Execution Time:0.00063014030456543

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.00028085708618164

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '6h8gg4tluplf3am87k11p75jffvkp3vb'
AND `ip_address` = '::1' 
 Execution Time:0.00053501129150391

SELECT GET_LOCK('7413dc3b302a51fa9f0dcfbaa35550d0', 300) AS ci_session_lock 
 Execution Time:0.00031781196594238

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '6h8gg4tluplf3am87k11p75jffvkp3vb'
AND `ip_address` = '::1' 
 Execution Time:0.00042414665222168

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00053596496582031

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00052118301391602

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
 Execution Time:0.00046396255493164

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.00044703483581543

SHOW TABLES FROM `ospos` 
 Execution Time:0.0027878284454346

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00058484077453613

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0006260871887207

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00064706802368164

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00054097175598145

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00051999092102051

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00053191184997559

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00044798851013184

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'items%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.014545917510986

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_suppliers`.`person_id` = `ospos_people`.`person_id`
WHERE `category` = 0
AND `deleted` = 0
ORDER BY `company_name` ASC 
 Execution Time:0.016146183013916

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '6h8gg4tluplf3am87k11p75jffvkp3vb'
AND `ip_address` = '::1' 
 Execution Time:0.00079703330993652

SELECT GET_LOCK('7413dc3b302a51fa9f0dcfbaa35550d0', 300) AS ci_session_lock 
 Execution Time:0.00038290023803711

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '6h8gg4tluplf3am87k11p75jffvkp3vb'
AND `ip_address` = '::1' 
 Execution Time:0.00052380561828613

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00057601928710938

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00079107284545898

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00088691711425781

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00077295303344727

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.00037002563476562

SHOW TABLES FROM `ospos` 
 Execution Time:0.0034329891204834

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00049686431884766

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00043010711669922

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00053000450134277

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00051093101501465

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00067806243896484

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00046992301940918

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00058794021606445

SELECT `items`.`name` AS `name`, `items`.`item_number`, `items`.`category`, `item_quantities`.`quantity`, (item_quantities.quantity * items.qty_per_pack) as low_sell_quantity, `items`.`reorder_level`, `stock_locations`.`location_name`, `items`.`cost_price`, `items`.`unit_price`, (items.cost_price * item_quantities.quantity) AS sub_total_value
FROM `ospos_items` AS `items`
JOIN `ospos_item_quantities` AS `item_quantities` ON `items`.`item_id` = `item_quantities`.`item_id`
JOIN `ospos_stock_locations` AS `stock_locations` ON `item_quantities`.`location_id` = `stock_locations`.`location_id`
WHERE `items`.`deleted` = 0
AND `items`.`stock_type` = 0
AND `stock_locations`.`deleted` = 0
AND `items`.`supplier_id` = '5'
ORDER BY `items`.`name`, `items`.`qty_per_pack` 
 Execution Time:0.036381006240845

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.002263069152832

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.010874032974243

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '6h8gg4tluplf3am87k11p75jffvkp3vb'
AND `ip_address` = '::1' 
 Execution Time:0.00047397613525391

SELECT GET_LOCK('7413dc3b302a51fa9f0dcfbaa35550d0', 300) AS ci_session_lock 
 Execution Time:0.00035405158996582

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '6h8gg4tluplf3am87k11p75jffvkp3vb'
AND `ip_address` = '::1' 
 Execution Time:0.00064897537231445

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00059199333190918

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00050687789916992

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00087118148803711

SHOW TABLES FROM `ospos` 
 Execution Time:0.0026559829711914

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00047898292541504

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00039505958557129

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00058507919311523

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00062799453735352

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00064992904663086

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0004580020904541

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00047111511230469

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1' 
 Execution Time:0.00056219100952148

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00052118301391602

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_receivings'
 LIMIT 1 
 Execution Time:0.0003352165222168

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_customers'
 LIMIT 1 
 Execution Time:0.00031709671020508

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_discounts'
 LIMIT 1 
 Execution Time:0.00033187866210938

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.00029087066650391

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_suppliers'
 LIMIT 1 
 Execution Time:0.00033783912658691

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_suppliersgls'
 LIMIT 1 
 Execution Time:0.00042891502380371

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.00045299530029297

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '6h8gg4tluplf3am87k11p75jffvkp3vb'
AND `ip_address` = '::1' 
 Execution Time:0.00048589706420898

SELECT GET_LOCK('7413dc3b302a51fa9f0dcfbaa35550d0', 300) AS ci_session_lock 
 Execution Time:0.00029277801513672

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '6h8gg4tluplf3am87k11p75jffvkp3vb'
AND `ip_address` = '::1' 
 Execution Time:0.00054717063903809

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00053596496582031

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00049901008605957

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00087594985961914

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00047612190246582

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.00034713745117188

SHOW TABLES FROM `ospos` 
 Execution Time:0.0026230812072754

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00052809715270996

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00048398971557617

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00050687789916992

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00049901008605957

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00061798095703125

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00054502487182617

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00066184997558594

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'items%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.00064182281494141

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_suppliers`.`person_id` = `ospos_people`.`person_id`
WHERE `category` = 0
AND `deleted` = 0
ORDER BY `company_name` ASC 
 Execution Time:0.00066900253295898

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '6h8gg4tluplf3am87k11p75jffvkp3vb'
AND `ip_address` = '::1' 
 Execution Time:0.0028359889984131

SELECT GET_LOCK('7413dc3b302a51fa9f0dcfbaa35550d0', 300) AS ci_session_lock 
 Execution Time:0.00029206275939941

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '6h8gg4tluplf3am87k11p75jffvkp3vb'
AND `ip_address` = '::1' 
 Execution Time:0.0003809928894043

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00078892707824707

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00063800811767578

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0011970996856689

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00072479248046875

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.0011270046234131

SHOW TABLES FROM `ospos` 
 Execution Time:0.0023128986358643

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0010018348693848

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0010461807250977

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00072598457336426

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0011401176452637

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0004878044128418

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00046205520629883

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00068902969360352

SELECT `items`.`name` AS `name`, `items`.`item_number`, `items`.`category`, `item_quantities`.`quantity`, (item_quantities.quantity * items.qty_per_pack) as low_sell_quantity, `items`.`reorder_level`, `stock_locations`.`location_name`, `items`.`cost_price`, `items`.`unit_price`, (items.cost_price * item_quantities.quantity) AS sub_total_value
FROM `ospos_items` AS `items`
JOIN `ospos_item_quantities` AS `item_quantities` ON `items`.`item_id` = `item_quantities`.`item_id`
JOIN `ospos_stock_locations` AS `stock_locations` ON `item_quantities`.`location_id` = `stock_locations`.`location_id`
WHERE `items`.`deleted` = 0
AND `items`.`stock_type` = 0
AND `stock_locations`.`deleted` = 0
AND `items`.`supplier_id` = '4'
ORDER BY `items`.`name`, `items`.`qty_per_pack` 
 Execution Time:0.0010020732879639

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00067687034606934

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00050902366638184

