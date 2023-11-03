SELECT GET_LOCK('7360534927d0f45d1a8ae8debadade21', 300) AS ci_session_lock 
 Execution Time:0.0066981315612793

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'hvshicemtl5k8llvs96dt2ed1ktlcel1'
AND `ip_address` = '::1' 
 Execution Time:0.11891388893127

SHOW TABLES FROM `ospos` 
 Execution Time:0.005328893661499

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.021992921829224

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.021371126174927

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'company_logo'
 LIMIT 1 
 Execution Time:0.0030560493469238

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00043487548828125

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'hvshicemtl5k8llvs96dt2ed1ktlcel1'
AND `ip_address` = '::1' 
 Execution Time:0.00096893310546875

SELECT GET_LOCK('7360534927d0f45d1a8ae8debadade21', 300) AS ci_session_lock 
 Execution Time:0.0009000301361084

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'hvshicemtl5k8llvs96dt2ed1ktlcel1'
AND `ip_address` = '::1' 
 Execution Time:0.0009310245513916

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.091235160827637

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE '%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.15513610839844

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.074574947357178

SHOW TABLES FROM `ospos` 
 Execution Time:0.0055608749389648

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0022380352020264

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0024368762969971

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0021958351135254

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0040481090545654

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.012411117553711

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0034599304199219

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.011140108108521

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'hvshicemtl5k8llvs96dt2ed1ktlcel1'
AND `ip_address` = '::1' 
 Execution Time:0.0010838508605957

SELECT GET_LOCK('7360534927d0f45d1a8ae8debadade21', 300) AS ci_session_lock 
 Execution Time:0.00044798851013184

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'hvshicemtl5k8llvs96dt2ed1ktlcel1'
AND `ip_address` = '::1' 
 Execution Time:0.00088310241699219

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010411739349365

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0011329650878906

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0030481815338135

SHOW TABLES FROM `ospos` 
 Execution Time:0.034816026687622

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.014389991760254

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.013039827346802

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0048148632049561

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00087499618530273

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0037190914154053

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0032570362091064

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0007631778717041

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1' 
 Execution Time:0.0010299682617188

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.0012969970703125

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_receivings'
 LIMIT 1 
 Execution Time:0.00055980682373047

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_customers'
 LIMIT 1 
 Execution Time:0.0010089874267578

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_discounts'
 LIMIT 1 
 Execution Time:0.00043392181396484

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.00035905838012695

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_suppliers'
 LIMIT 1 
 Execution Time:0.00035309791564941

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_suppliersgls'
 LIMIT 1 
 Execution Time:0.0003509521484375

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.00034379959106445

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'hvshicemtl5k8llvs96dt2ed1ktlcel1'
AND `ip_address` = '::1' 
 Execution Time:0.0010781288146973

SELECT GET_LOCK('7360534927d0f45d1a8ae8debadade21', 300) AS ci_session_lock 
 Execution Time:0.00040721893310547

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'hvshicemtl5k8llvs96dt2ed1ktlcel1'
AND `ip_address` = '::1' 
 Execution Time:0.00067710876464844

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0009620189666748

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00065517425537109

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0010919570922852

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00058102607727051

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.00037312507629395

SHOW TABLES FROM `ospos` 
 Execution Time:0.0051920413970947

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0014910697937012

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00082302093505859

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00070691108703613

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0034329891204834

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00081300735473633

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00072789192199707

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0011119842529297

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'items%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.039794921875

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'hvshicemtl5k8llvs96dt2ed1ktlcel1'
AND `ip_address` = '::1' 
 Execution Time:0.00070500373840332

SELECT GET_LOCK('7360534927d0f45d1a8ae8debadade21', 300) AS ci_session_lock 
 Execution Time:0.00041794776916504

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'hvshicemtl5k8llvs96dt2ed1ktlcel1'
AND `ip_address` = '::1' 
 Execution Time:0.00060486793518066

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00067496299743652

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00059914588928223

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0013589859008789

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00067806243896484

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.00043106079101562

SHOW TABLES FROM `ospos` 
 Execution Time:0.00313401222229

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0005490779876709

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00074005126953125

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.028753995895386

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.024363994598389

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0004279613494873

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00044393539428711

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.010250091552734

SELECT `items`.`name` AS `name`, `items`.`item_number`, `items`.`category`, `item_quantities`.`quantity`, (item_quantities.quantity * items.qty_per_pack) as low_sell_quantity, `items`.`reorder_level`, `stock_locations`.`location_name`, `items`.`cost_price`, `items`.`unit_price`, (items.cost_price * item_quantities.quantity) AS sub_total_value
FROM `ospos_items` AS `items`
JOIN `ospos_item_quantities` AS `item_quantities` ON `items`.`item_id` = `item_quantities`.`item_id`
JOIN `ospos_stock_locations` AS `stock_locations` ON `item_quantities`.`location_id` = `stock_locations`.`location_id`
WHERE `items`.`deleted` = 0
AND `items`.`stock_type` = 0
AND `stock_locations`.`deleted` = 0
AND `stock_locations`.`location_id` = '1'
ORDER BY `items`.`name`, `items`.`qty_per_pack` 
 Execution Time:0.052409887313843

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00078296661376953

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00055384635925293

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'hvshicemtl5k8llvs96dt2ed1ktlcel1'
AND `ip_address` = '::1' 
 Execution Time:0.00061297416687012

SELECT GET_LOCK('7360534927d0f45d1a8ae8debadade21', 300) AS ci_session_lock 
 Execution Time:0.0004580020904541

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'hvshicemtl5k8llvs96dt2ed1ktlcel1'
AND `ip_address` = '::1' 
 Execution Time:0.00061392784118652

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00095200538635254

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00083398818969727

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0013868808746338

SHOW TABLES FROM `ospos` 
 Execution Time:0.0053589344024658

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00058388710021973

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00075793266296387

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00098681449890137

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00078892707824707

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00062990188598633

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00063896179199219

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00085902214050293

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1' 
 Execution Time:0.00099396705627441

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00055813789367676

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_receivings'
 LIMIT 1 
 Execution Time:0.00084495544433594

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_customers'
 LIMIT 1 
 Execution Time:0.00075602531433105

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_discounts'
 LIMIT 1 
 Execution Time:0.00082302093505859

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.00047397613525391

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_suppliers'
 LIMIT 1 
 Execution Time:0.00045108795166016

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_suppliersgls'
 LIMIT 1 
 Execution Time:0.00038504600524902

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.00049519538879395

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'hvshicemtl5k8llvs96dt2ed1ktlcel1'
AND `ip_address` = '::1' 
 Execution Time:0.020281076431274

SELECT GET_LOCK('7360534927d0f45d1a8ae8debadade21', 300) AS ci_session_lock 
 Execution Time:0.03719687461853

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'hvshicemtl5k8llvs96dt2ed1ktlcel1'
AND `ip_address` = '::1' 
 Execution Time:0.017804861068726

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.046389102935791

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.011281967163086

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.034147024154663

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.010861873626709

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.0091550350189209

SHOW TABLES FROM `ospos` 
 Execution Time:0.029307126998901

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0050108432769775

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.001338005065918

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0158531665802

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.026512861251831

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.10797119140625

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.060805082321167

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.010953903198242

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'items%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.021795034408569

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'hvshicemtl5k8llvs96dt2ed1ktlcel1'
AND `ip_address` = '::1' 
 Execution Time:0.0013818740844727

SELECT GET_LOCK('7360534927d0f45d1a8ae8debadade21', 300) AS ci_session_lock 
 Execution Time:0.00058913230895996

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'hvshicemtl5k8llvs96dt2ed1ktlcel1'
AND `ip_address` = '::1' 
 Execution Time:0.00067806243896484

UPDATE `ospos_sessions` SET `timestamp` = 1698594150, `data` = '__ci_last_regenerate|i:1698594150;person_id|s:1:\"1\";menu_group|s:4:\"home\";'
WHERE `id` = 'hvshicemtl5k8llvs96dt2ed1ktlcel1'
AND `ip_address` = '::1' 
 Execution Time:0.0035650730133057

SELECT RELEASE_LOCK('7360534927d0f45d1a8ae8debadade21') AS ci_session_lock 
 Execution Time:0.00030183792114258

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'hvshicemtl5k8llvs96dt2ed1ktlcel1'
AND `ip_address` = '::1' 
 Execution Time:0.00062799453735352

SELECT GET_LOCK('10ba2d705526acdad9eb7cd539754fa8', 300) AS ci_session_lock 
 Execution Time:0.00041103363037109

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'a33umfksnaug8897c68c16b8e8oqlmbp'
AND `ip_address` = '::1' 
 Execution Time:0.00074601173400879

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00087594985961914

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00085902214050293

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0020749568939209

SHOW TABLES FROM `ospos` 
 Execution Time:0.006166934967041

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00056290626525879

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00073814392089844

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00089883804321289

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00084304809570312

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010590553283691

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0012509822845459

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010471343994141

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1' 
 Execution Time:0.00082206726074219

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00060892105102539

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_receivings'
 LIMIT 1 
 Execution Time:0.00053000450134277

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_customers'
 LIMIT 1 
 Execution Time:0.00063300132751465

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_discounts'
 LIMIT 1 
 Execution Time:0.00044798851013184

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.0005950927734375

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_suppliers'
 LIMIT 1 
 Execution Time:0.00045919418334961

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_suppliersgls'
 LIMIT 1 
 Execution Time:0.00040388107299805

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.0004420280456543

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'a33umfksnaug8897c68c16b8e8oqlmbp'
AND `ip_address` = '::1' 
 Execution Time:0.0007939338684082

SELECT GET_LOCK('10ba2d705526acdad9eb7cd539754fa8', 300) AS ci_session_lock 
 Execution Time:0.00043797492980957

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'a33umfksnaug8897c68c16b8e8oqlmbp'
AND `ip_address` = '::1' 
 Execution Time:0.00078892707824707

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00088715553283691

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0010061264038086

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00154709815979

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00062894821166992

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.0004279613494873

SHOW TABLES FROM `ospos` 
 Execution Time:0.006721019744873

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0014240741729736

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0013589859008789

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0018692016601562

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00081300735473633

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0012099742889404

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.001007080078125

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0014700889587402

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'items%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.001101016998291

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_suppliers`.`person_id` = `ospos_people`.`person_id`
WHERE `category` = 0
AND `deleted` = 0
ORDER BY `company_name` ASC 
 Execution Time:0.021995067596436

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'a33umfksnaug8897c68c16b8e8oqlmbp'
AND `ip_address` = '::1' 
 Execution Time:0.0011329650878906

SELECT GET_LOCK('10ba2d705526acdad9eb7cd539754fa8', 300) AS ci_session_lock 
 Execution Time:0.0013210773468018

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'a33umfksnaug8897c68c16b8e8oqlmbp'
AND `ip_address` = '::1' 
 Execution Time:0.001572847366333

UPDATE `ospos_sessions` SET `timestamp` = 1698594501, `data` = '__ci_last_regenerate|i:1698594501;person_id|s:1:\"1\";menu_group|s:4:\"home\";'
WHERE `id` = 'a33umfksnaug8897c68c16b8e8oqlmbp'
AND `ip_address` = '::1' 
 Execution Time:0.0033318996429443

SELECT RELEASE_LOCK('10ba2d705526acdad9eb7cd539754fa8') AS ci_session_lock 
 Execution Time:0.0004279613494873

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'a33umfksnaug8897c68c16b8e8oqlmbp'
AND `ip_address` = '::1' 
 Execution Time:0.00082302093505859

SELECT GET_LOCK('bc32ea269de890f77bf44c3625379d60', 300) AS ci_session_lock 
 Execution Time:0.0003349781036377

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '5l725i271mebojvt98oigtpeh9ku6hkn'
AND `ip_address` = '::1' 
 Execution Time:0.00052118301391602

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00087690353393555

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'suppliers%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0012679100036621

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'suppliers!_%' ESCAPE '!' 
 Execution Time:0.00048303604125977

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00088119506835938

SHOW TABLES FROM `ospos` 
 Execution Time:0.013488054275513

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00064706802368164

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00062108039855957

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0082051753997803

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0017979145050049

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00060701370239258

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0051300525665283

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0016109943389893

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'messages'
 LIMIT 1 
 Execution Time:0.0012860298156738

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00062704086303711

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00068116188049316

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '5l725i271mebojvt98oigtpeh9ku6hkn'
AND `ip_address` = '::1' 
 Execution Time:0.0009770393371582

SELECT GET_LOCK('bc32ea269de890f77bf44c3625379d60', 300) AS ci_session_lock 
 Execution Time:0.00051093101501465

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '5l725i271mebojvt98oigtpeh9ku6hkn'
AND `ip_address` = '::1' 
 Execution Time:0.00065493583679199

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00081396102905273

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'suppliers%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00055408477783203

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'suppliers!_%' ESCAPE '!' 
 Execution Time:0.00050783157348633

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0013117790222168

SHOW TABLES FROM `ospos` 
 Execution Time:0.0059759616851807

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00055694580078125

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00082516670227051

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0046379566192627

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0011630058288574

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00071406364440918

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0007171630859375

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0076899528503418

SELECT *
FROM `ospos_suppliers` AS `suppliers`
JOIN `ospos_people` ON `suppliers`.`person_id` = `ospos_people`.`person_id`
WHERE   (
`first_name` LIKE '%%' ESCAPE '!'
OR  `last_name` LIKE '%%' ESCAPE '!'
OR  `company_name` LIKE '%%' ESCAPE '!'
OR  `agency_name` LIKE '%%' ESCAPE '!'
OR  `email` LIKE '%%' ESCAPE '!'
OR  `phone_number` LIKE '%%' ESCAPE '!'
OR  `account_number` LIKE '%%' ESCAPE '!'
OR  CONCAT(first_name, " ", last_name) LIKE '%%' ESCAPE '!'
 )
AND `deleted` = 0
 LIMIT 25 
 Execution Time:0.0012338161468506

SELECT COUNT(suppliers.person_id) as count
FROM `ospos_suppliers` AS `suppliers`
JOIN `ospos_people` ON `suppliers`.`person_id` = `ospos_people`.`person_id`
WHERE   (
`first_name` LIKE '%%' ESCAPE '!'
OR  `last_name` LIKE '%%' ESCAPE '!'
OR  `company_name` LIKE '%%' ESCAPE '!'
OR  `agency_name` LIKE '%%' ESCAPE '!'
OR  `email` LIKE '%%' ESCAPE '!'
OR  `phone_number` LIKE '%%' ESCAPE '!'
OR  `account_number` LIKE '%%' ESCAPE '!'
OR  CONCAT(first_name, " ", last_name) LIKE '%%' ESCAPE '!'
 )
AND `deleted` = 0 
 Execution Time:0.00092887878417969

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '5l725i271mebojvt98oigtpeh9ku6hkn'
AND `ip_address` = '::1' 
 Execution Time:0.0010600090026855

SELECT GET_LOCK('bc32ea269de890f77bf44c3625379d60', 300) AS ci_session_lock 
 Execution Time:0.0027549266815186

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '5l725i271mebojvt98oigtpeh9ku6hkn'
AND `ip_address` = '::1' 
 Execution Time:0.0014710426330566

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00074982643127441

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00082898139953613

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.001338005065918

SHOW TABLES FROM `ospos` 
 Execution Time:0.0052580833435059

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00046682357788086

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00057101249694824

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00062990188598633

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0006721019744873

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00052094459533691

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00056695938110352

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00076794624328613

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1' 
 Execution Time:0.0016379356384277

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00056004524230957

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
 Execution Time:0.00055408477783203

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_discounts'
 LIMIT 1 
 Execution Time:0.00051498413085938

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.0019931793212891

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_suppliers'
 LIMIT 1 
 Execution Time:0.0017819404602051

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_suppliersgls'
 LIMIT 1 
 Execution Time:0.00049090385437012

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.00049495697021484

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '5l725i271mebojvt98oigtpeh9ku6hkn'
AND `ip_address` = '::1' 
 Execution Time:0.00080204010009766

SELECT GET_LOCK('bc32ea269de890f77bf44c3625379d60', 300) AS ci_session_lock 
 Execution Time:0.00050783157348633

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '5l725i271mebojvt98oigtpeh9ku6hkn'
AND `ip_address` = '::1' 
 Execution Time:0.00081992149353027

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00087404251098633

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00092220306396484

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0015690326690674

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.000823974609375

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.00078201293945312

SHOW TABLES FROM `ospos` 
 Execution Time:0.0054190158843994

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00060892105102539

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00075411796569824

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0012049674987793

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010130405426025

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0005958080291748

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00091004371643066

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00084805488586426

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'items%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.0011348724365234

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_suppliers`.`person_id` = `ospos_people`.`person_id`
WHERE `category` = 0
AND `deleted` = 0
ORDER BY `company_name` ASC 
 Execution Time:0.00093507766723633

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '5l725i271mebojvt98oigtpeh9ku6hkn'
AND `ip_address` = '::1' 
 Execution Time:0.00066399574279785

SELECT GET_LOCK('bc32ea269de890f77bf44c3625379d60', 300) AS ci_session_lock 
 Execution Time:0.00039982795715332

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '5l725i271mebojvt98oigtpeh9ku6hkn'
AND `ip_address` = '::1' 
 Execution Time:0.00057506561279297

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0007171630859375

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00066518783569336

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0009760856628418

SHOW TABLES FROM `ospos` 
 Execution Time:0.0034580230712891

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00049090385437012

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00047993659973145

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00095295906066895

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0005800724029541

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00057387351989746

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00050997734069824

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00060796737670898

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1' 
 Execution Time:0.00059390068054199

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.0011098384857178

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_receivings'
 LIMIT 1 
 Execution Time:0.00058794021606445

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_customers'
 LIMIT 1 
 Execution Time:0.00053501129150391

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_discounts'
 LIMIT 1 
 Execution Time:0.00042295455932617

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.00048995018005371

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_suppliers'
 LIMIT 1 
 Execution Time:0.00043082237243652

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_suppliersgls'
 LIMIT 1 
 Execution Time:0.00041007995605469

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.00039196014404297

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '5l725i271mebojvt98oigtpeh9ku6hkn'
AND `ip_address` = '::1' 
 Execution Time:0.00079512596130371

SELECT GET_LOCK('bc32ea269de890f77bf44c3625379d60', 300) AS ci_session_lock 
 Execution Time:0.00048398971557617

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '5l725i271mebojvt98oigtpeh9ku6hkn'
AND `ip_address` = '::1' 
 Execution Time:0.00060391426086426

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00067901611328125

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00058317184448242

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00089216232299805

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010979175567627

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.00053095817565918

SHOW TABLES FROM `ospos` 
 Execution Time:0.0027458667755127

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00056099891662598

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00069999694824219

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00055694580078125

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00052285194396973

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00047206878662109

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00053191184997559

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00057816505432129

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'items%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.00087809562683105

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_suppliers`.`person_id` = `ospos_people`.`person_id`
WHERE `category` = 0
AND `deleted` = 0
ORDER BY `company_name` ASC 
 Execution Time:0.0008089542388916

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '5l725i271mebojvt98oigtpeh9ku6hkn'
AND `ip_address` = '::1' 
 Execution Time:0.0010559558868408

SELECT GET_LOCK('bc32ea269de890f77bf44c3625379d60', 300) AS ci_session_lock 
 Execution Time:0.0030941963195801

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '5l725i271mebojvt98oigtpeh9ku6hkn'
AND `ip_address` = '::1' 
 Execution Time:0.00078415870666504

UPDATE `ospos_sessions` SET `timestamp` = 1698595087, `data` = '__ci_last_regenerate|i:1698595087;person_id|s:1:\"1\";menu_group|s:4:\"home\";'
WHERE `id` = '5l725i271mebojvt98oigtpeh9ku6hkn'
AND `ip_address` = '::1' 
 Execution Time:0.0040450096130371

SELECT RELEASE_LOCK('bc32ea269de890f77bf44c3625379d60') AS ci_session_lock 
 Execution Time:0.00032997131347656

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '5l725i271mebojvt98oigtpeh9ku6hkn'
AND `ip_address` = '::1' 
 Execution Time:0.0023880004882812

SELECT GET_LOCK('a5964facce133c47f492158a8ca55576', 300) AS ci_session_lock 
 Execution Time:0.00041890144348145

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'kqtrot7pjq7vbub2ub307l247iff5cr8'
AND `ip_address` = '::1' 
 Execution Time:0.00071406364440918

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0011417865753174

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
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
 Execution Time:0.0014970302581787

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00069403648376465

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.00054597854614258

SHOW TABLES FROM `ospos` 
 Execution Time:0.0059299468994141

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00055980682373047

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00061678886413574

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00080013275146484

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00071883201599121

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00062894821166992

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00063300132751465

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00069093704223633

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'items%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.0011098384857178

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_suppliers`.`person_id` = `ospos_people`.`person_id`
WHERE `category` = 0
AND `deleted` = 0
ORDER BY `company_name` ASC 
 Execution Time:0.0055899620056152

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'kqtrot7pjq7vbub2ub307l247iff5cr8'
AND `ip_address` = '::1' 
 Execution Time:0.00090503692626953

SELECT GET_LOCK('a5964facce133c47f492158a8ca55576', 300) AS ci_session_lock 
 Execution Time:0.00043606758117676

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'kqtrot7pjq7vbub2ub307l247iff5cr8'
AND `ip_address` = '::1' 
 Execution Time:0.00047898292541504

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.01172399520874

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00069999694824219

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0073099136352539

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0082101821899414

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.00054001808166504

SHOW TABLES FROM `ospos` 
 Execution Time:0.021939039230347

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.060487985610962

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.019037961959839

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0024569034576416

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0050718784332275

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.025591135025024

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0012078285217285

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0007789134979248

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'items%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.00091791152954102

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_suppliers`.`person_id` = `ospos_people`.`person_id`
WHERE `category` = 0
AND `deleted` = 0
ORDER BY `company_name` ASC 
 Execution Time:0.0012190341949463

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'kqtrot7pjq7vbub2ub307l247iff5cr8'
AND `ip_address` = '::1' 
 Execution Time:0.00098180770874023

SELECT GET_LOCK('a5964facce133c47f492158a8ca55576', 300) AS ci_session_lock 
 Execution Time:0.00054097175598145

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'kqtrot7pjq7vbub2ub307l247iff5cr8'
AND `ip_address` = '::1' 
 Execution Time:0.0016968250274658

UPDATE `ospos_sessions` SET `timestamp` = 1698595402, `data` = '__ci_last_regenerate|i:1698595402;person_id|s:1:\"1\";menu_group|s:4:\"home\";'
WHERE `id` = 'kqtrot7pjq7vbub2ub307l247iff5cr8'
AND `ip_address` = '::1' 
 Execution Time:0.0048999786376953

SELECT RELEASE_LOCK('a5964facce133c47f492158a8ca55576') AS ci_session_lock 
 Execution Time:0.00042986869812012

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'kqtrot7pjq7vbub2ub307l247iff5cr8'
AND `ip_address` = '::1' 
 Execution Time:0.00080204010009766

SELECT GET_LOCK('edb1d91b98e5cf8a01593c7fc7274a44', 300) AS ci_session_lock 
 Execution Time:0.00026822090148926

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '3n141thou38jruarogbcivo80e1ul6ru'
AND `ip_address` = '::1' 
 Execution Time:0.00052690505981445

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00070309638977051

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00067400932312012

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0010850429534912

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00047492980957031

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.00034904479980469

SHOW TABLES FROM `ospos` 
 Execution Time:0.0040159225463867

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00037908554077148

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0006411075592041

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0042641162872314

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0052120685577393

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.001378059387207

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00054502487182617

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0048408508300781

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'items%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.0012931823730469

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_suppliers`.`person_id` = `ospos_people`.`person_id`
WHERE `category` = 0
AND `deleted` = 0
ORDER BY `company_name` ASC 
 Execution Time:0.0025391578674316

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '3n141thou38jruarogbcivo80e1ul6ru'
AND `ip_address` = '::1' 
 Execution Time:0.00059986114501953

SELECT GET_LOCK('edb1d91b98e5cf8a01593c7fc7274a44', 300) AS ci_session_lock 
 Execution Time:0.00030398368835449

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '3n141thou38jruarogbcivo80e1ul6ru'
AND `ip_address` = '::1' 
 Execution Time:0.00088095664978027

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.010948181152344

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0024230480194092

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0012319087982178

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010368824005127

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.001600980758667

SHOW TABLES FROM `ospos` 
 Execution Time:0.0063989162445068

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0018918514251709

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0098540782928467

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.01751708984375

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0091540813446045

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.003770112991333

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.021433115005493

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0014660358428955

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'items%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.0011401176452637

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_suppliers`.`person_id` = `ospos_people`.`person_id`
WHERE `category` = 0
AND `deleted` = 0
ORDER BY `company_name` ASC 
 Execution Time:0.0076830387115479

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '3n141thou38jruarogbcivo80e1ul6ru'
AND `ip_address` = '::1' 
 Execution Time:0.00090384483337402

SELECT GET_LOCK('edb1d91b98e5cf8a01593c7fc7274a44', 300) AS ci_session_lock 
 Execution Time:0.00047612190246582

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '3n141thou38jruarogbcivo80e1ul6ru'
AND `ip_address` = '::1' 
 Execution Time:0.00078797340393066

UPDATE `ospos_sessions` SET `timestamp` = 1698595927, `data` = '__ci_last_regenerate|i:1698595927;person_id|s:1:\"1\";menu_group|s:4:\"home\";'
WHERE `id` = '3n141thou38jruarogbcivo80e1ul6ru'
AND `ip_address` = '::1' 
 Execution Time:0.002938985824585

SELECT RELEASE_LOCK('edb1d91b98e5cf8a01593c7fc7274a44') AS ci_session_lock 
 Execution Time:0.00038290023803711

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '3n141thou38jruarogbcivo80e1ul6ru'
AND `ip_address` = '::1' 
 Execution Time:0.0053050518035889

SELECT GET_LOCK('1d4c44ab590c2e098011c7934bf4579c', 300) AS ci_session_lock 
 Execution Time:0.0004730224609375

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'mc561pvejiaq72fd6sarvonkeb9k84dv'
AND `ip_address` = '::1' 
 Execution Time:0.00054097175598145

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0056271553039551

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00089693069458008

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0054078102111816

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0022778511047363

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.00097918510437012

SHOW TABLES FROM `ospos` 
 Execution Time:0.0096569061279297

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0061888694763184

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0010340213775635

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.015286922454834

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00071811676025391

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00090479850769043

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00065803527832031

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00068807601928711

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'items%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.0015668869018555

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_suppliers`.`person_id` = `ospos_people`.`person_id`
WHERE `category` = 0
AND `deleted` = 0
ORDER BY `company_name` ASC 
 Execution Time:0.0011129379272461

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'mc561pvejiaq72fd6sarvonkeb9k84dv'
AND `ip_address` = '::1' 
 Execution Time:0.000823974609375

SELECT GET_LOCK('1d4c44ab590c2e098011c7934bf4579c', 300) AS ci_session_lock 
 Execution Time:0.0017609596252441

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'mc561pvejiaq72fd6sarvonkeb9k84dv'
AND `ip_address` = '::1' 
 Execution Time:0.00075888633728027

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00088787078857422

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0016508102416992

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.001882791519165

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0016720294952393

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.0005500316619873

SHOW TABLES FROM `ospos` 
 Execution Time:0.0039629936218262

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00043606758117676

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00056600570678711

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00070309638977051

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00077199935913086

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00061988830566406

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0008399486541748

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00074601173400879

SELECT `items`.`name` AS `name`, `items`.`item_number`, `items`.`category`, `item_quantities`.`quantity`, (item_quantities.quantity * items.qty_per_pack) as low_sell_quantity, `items`.`reorder_level`, `stock_locations`.`location_name`, `items`.`cost_price`, `items`.`unit_price`, (items.cost_price * item_quantities.quantity) AS sub_total_value
FROM `ospos_items` AS `items`
JOIN `ospos_item_quantities` AS `item_quantities` ON `items`.`item_id` = `item_quantities`.`item_id`
JOIN `ospos_stock_locations` AS `stock_locations` ON `item_quantities`.`location_id` = `stock_locations`.`location_id`
WHERE `items`.`deleted` = 0
AND `items`.`stock_type` = 0
AND `stock_locations`.`deleted` = 0
ORDER BY `items`.`name`, `items`.`qty_per_pack` 
 Execution Time:0.0050821304321289

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00087285041809082

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00063705444335938

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'mc561pvejiaq72fd6sarvonkeb9k84dv'
AND `ip_address` = '::1' 
 Execution Time:0.00067877769470215

SELECT GET_LOCK('1d4c44ab590c2e098011c7934bf4579c', 300) AS ci_session_lock 
 Execution Time:0.00030517578125

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'mc561pvejiaq72fd6sarvonkeb9k84dv'
AND `ip_address` = '::1' 
 Execution Time:0.00051712989807129

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.001072883605957

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00085115432739258

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0015311241149902

SHOW TABLES FROM `ospos` 
 Execution Time:0.0048148632049561

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00059103965759277

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0007779598236084

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0008690357208252

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00074481964111328

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00064516067504883

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00065898895263672

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00069499015808105

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1' 
 Execution Time:0.0093309879302979

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.004047155380249

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_receivings'
 LIMIT 1 
 Execution Time:0.00068402290344238

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_customers'
 LIMIT 1 
 Execution Time:0.00089097023010254

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_discounts'
 LIMIT 1 
 Execution Time:0.0012819766998291

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.0013079643249512

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_suppliers'
 LIMIT 1 
 Execution Time:0.0027890205383301

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_suppliersgls'
 LIMIT 1 
 Execution Time:0.0081679821014404

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.0037720203399658

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'mc561pvejiaq72fd6sarvonkeb9k84dv'
AND `ip_address` = '::1' 
 Execution Time:0.016546010971069

SELECT GET_LOCK('1d4c44ab590c2e098011c7934bf4579c', 300) AS ci_session_lock 
 Execution Time:0.00046586990356445

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'mc561pvejiaq72fd6sarvonkeb9k84dv'
AND `ip_address` = '::1' 
 Execution Time:0.00059294700622559

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0018148422241211

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0010628700256348

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0010139942169189

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0016369819641113

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.001384973526001

SHOW TABLES FROM `ospos` 
 Execution Time:0.0094168186187744

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0027561187744141

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0036430358886719

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00093293190002441

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0009000301361084

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0017809867858887

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00068521499633789

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00061297416687012

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'items%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.00094890594482422

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_suppliers`.`person_id` = `ospos_people`.`person_id`
WHERE `category` = 0
AND `deleted` = 0
ORDER BY `company_name` ASC 
 Execution Time:0.00070810317993164

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'mc561pvejiaq72fd6sarvonkeb9k84dv'
AND `ip_address` = '::1' 
 Execution Time:0.0010838508605957

SELECT GET_LOCK('1d4c44ab590c2e098011c7934bf4579c', 300) AS ci_session_lock 
 Execution Time:0.00041604042053223

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'mc561pvejiaq72fd6sarvonkeb9k84dv'
AND `ip_address` = '::1' 
 Execution Time:0.00076413154602051

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010099411010742

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00098013877868652

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0024681091308594

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0011520385742188

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.00064396858215332

SHOW TABLES FROM `ospos` 
 Execution Time:0.060228109359741

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.013488054275513

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0036280155181885

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.035321950912476

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00070595741271973

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00057888031005859

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00047111511230469

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.072888851165771

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'items%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.0011608600616455

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_suppliers`.`person_id` = `ospos_people`.`person_id`
WHERE `category` = 0
AND `deleted` = 0
ORDER BY `company_name` ASC 
 Execution Time:0.0012080669403076

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'mc561pvejiaq72fd6sarvonkeb9k84dv'
AND `ip_address` = '::1' 
 Execution Time:0.0058858394622803

SELECT GET_LOCK('1d4c44ab590c2e098011c7934bf4579c', 300) AS ci_session_lock 
 Execution Time:0.0011169910430908

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'mc561pvejiaq72fd6sarvonkeb9k84dv'
AND `ip_address` = '::1' 
 Execution Time:0.0035948753356934

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0014610290527344

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0064048767089844

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.035194873809814

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.11493396759033

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.0007328987121582

SHOW TABLES FROM `ospos` 
 Execution Time:0.0097489356994629

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00058388710021973

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00057005882263184

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0068378448486328

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0022430419921875

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00096988677978516

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00044989585876465

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0021569728851318

SELECT `items`.`name` AS `name`, `items`.`item_number`, `items`.`category`, `item_quantities`.`quantity`, (item_quantities.quantity * items.qty_per_pack) as low_sell_quantity, `items`.`reorder_level`, `stock_locations`.`location_name`, `items`.`cost_price`, `items`.`unit_price`, (items.cost_price * item_quantities.quantity) AS sub_total_value
FROM `ospos_items` AS `items`
JOIN `ospos_item_quantities` AS `item_quantities` ON `items`.`item_id` = `item_quantities`.`item_id`
JOIN `ospos_stock_locations` AS `stock_locations` ON `item_quantities`.`location_id` = `stock_locations`.`location_id`
WHERE `items`.`deleted` = 0
AND `items`.`stock_type` = 0
AND `stock_locations`.`deleted` = 0
ORDER BY `items`.`name`, `items`.`qty_per_pack` 
 Execution Time:0.015084028244019

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0050609111785889

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0064411163330078

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'dnbegln895ijnpfv23k5252ntod9v55t'
AND `ip_address` = '::1' 
 Execution Time:0.0013351440429688

SELECT GET_LOCK('92e24b68e92c32ead78f9cc80e53193f', 300) AS ci_session_lock 
 Execution Time:0.00043702125549316

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'dnbegln895ijnpfv23k5252ntod9v55t'
AND `ip_address` = '::1' 
 Execution Time:0.00051689147949219

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00075411796569824

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE '%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00071310997009277

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0013890266418457

SHOW TABLES FROM `ospos` 
 Execution Time:0.0052490234375

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00061392784118652

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00068998336791992

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00071406364440918

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00061297416687012

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00048398971557617

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00054597854614258

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00073409080505371

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'dnbegln895ijnpfv23k5252ntod9v55t'
AND `ip_address` = '::1' 
 Execution Time:0.0024018287658691

SELECT GET_LOCK('92e24b68e92c32ead78f9cc80e53193f', 300) AS ci_session_lock 
 Execution Time:0.00040698051452637

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'dnbegln895ijnpfv23k5252ntod9v55t'
AND `ip_address` = '::1' 
 Execution Time:0.00053215026855469

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0033729076385498

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0020930767059326

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.001392126083374

SHOW TABLES FROM `ospos` 
 Execution Time:0.032387971878052

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00061297416687012

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00071907043457031

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0017659664154053

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0015490055084229

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00085592269897461

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099897384643555

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00064992904663086

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1' 
 Execution Time:0.0014510154724121

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00074982643127441

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_receivings'
 LIMIT 1 
 Execution Time:0.00054383277893066

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_customers'
 LIMIT 1 
 Execution Time:0.00049996376037598

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_discounts'
 LIMIT 1 
 Execution Time:0.0016820430755615

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.00086092948913574

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_suppliers'
 LIMIT 1 
 Execution Time:0.00074100494384766

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_suppliersgls'
 LIMIT 1 
 Execution Time:0.00056004524230957

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.00056004524230957

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'dnbegln895ijnpfv23k5252ntod9v55t'
AND `ip_address` = '::1' 
 Execution Time:0.0029940605163574

SELECT GET_LOCK('92e24b68e92c32ead78f9cc80e53193f', 300) AS ci_session_lock 
 Execution Time:0.00048089027404785

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'dnbegln895ijnpfv23k5252ntod9v55t'
AND `ip_address` = '::1' 
 Execution Time:0.00098896026611328

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00066590309143066

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0010499954223633

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0046961307525635

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0008080005645752

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_suppliersgls'
 LIMIT 1 
 Execution Time:0.00054407119750977

SHOW TABLES FROM `ospos` 
 Execution Time:0.0085899829864502

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0011050701141357

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0014300346374512

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0045328140258789

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00095915794372559

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00059294700622559

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0006859302520752

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00063586235046387

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_suppliers`.`person_id` = `ospos_people`.`person_id`
WHERE `category` = 0
AND `deleted` = 0
ORDER BY `company_name` ASC 
 Execution Time:0.0017600059509277

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'dnbegln895ijnpfv23k5252ntod9v55t'
AND `ip_address` = '::1' 
 Execution Time:0.00083589553833008

SELECT GET_LOCK('92e24b68e92c32ead78f9cc80e53193f', 300) AS ci_session_lock 
 Execution Time:0.26989603042603

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'dnbegln895ijnpfv23k5252ntod9v55t'
AND `ip_address` = '::1' 
 Execution Time:0.00055313110351562

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.001032829284668

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0017261505126953

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0019040107727051

SHOW TABLES FROM `ospos` 
 Execution Time:0.0060291290283203

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00063300132751465

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0010130405426025

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00085902214050293

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00094819068908691

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0017960071563721

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00067520141601562

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0014231204986572

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1' 
 Execution Time:0.00083303451538086

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00077295303344727

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_receivings'
 LIMIT 1 
 Execution Time:0.00065207481384277

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_customers'
 LIMIT 1 
 Execution Time:0.00068211555480957

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_discounts'
 LIMIT 1 
 Execution Time:0.00059890747070312

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.00058794021606445

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_suppliers'
 LIMIT 1 
 Execution Time:0.00063300132751465

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_suppliersgls'
 LIMIT 1 
 Execution Time:0.0011360645294189

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.00092315673828125

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'dnbegln895ijnpfv23k5252ntod9v55t'
AND `ip_address` = '::1' 
 Execution Time:0.00057888031005859

SELECT GET_LOCK('92e24b68e92c32ead78f9cc80e53193f', 300) AS ci_session_lock 
 Execution Time:0.0004429817199707

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'dnbegln895ijnpfv23k5252ntod9v55t'
AND `ip_address` = '::1' 
 Execution Time:0.00066184997558594

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0066299438476562

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0013201236724854

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0035707950592041

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00083708763122559

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.00055503845214844

SHOW TABLES FROM `ospos` 
 Execution Time:0.0086779594421387

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00053715705871582

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00094413757324219

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00068211555480957

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00059795379638672

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00058388710021973

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0007929801940918

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00065898895263672

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'items%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.00085902214050293

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_suppliers`.`person_id` = `ospos_people`.`person_id`
WHERE `category` = 0
AND `deleted` = 0
ORDER BY `company_name` ASC 
 Execution Time:0.0031299591064453

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'dnbegln895ijnpfv23k5252ntod9v55t'
AND `ip_address` = '::1' 
 Execution Time:0.00059890747070312

SELECT GET_LOCK('92e24b68e92c32ead78f9cc80e53193f', 300) AS ci_session_lock 
 Execution Time:0.00046110153198242

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'dnbegln895ijnpfv23k5252ntod9v55t'
AND `ip_address` = '::1' 
 Execution Time:0.00099301338195801

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00079607963562012

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00064182281494141

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.001255989074707

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00063681602478027

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.00049495697021484

SHOW TABLES FROM `ospos` 
 Execution Time:0.0037081241607666

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00060200691223145

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0007779598236084

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00098085403442383

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00076103210449219

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00056695938110352

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00083112716674805

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00087213516235352

SELECT `items`.`name` AS `name`, `items`.`item_number`, `items`.`category`, `item_quantities`.`quantity`, (item_quantities.quantity * items.qty_per_pack) as low_sell_quantity, `items`.`reorder_level`, `stock_locations`.`location_name`, `items`.`cost_price`, `items`.`unit_price`, (items.cost_price * item_quantities.quantity) AS sub_total_value
FROM `ospos_items` AS `items`
JOIN `ospos_item_quantities` AS `item_quantities` ON `items`.`item_id` = `item_quantities`.`item_id`
JOIN `ospos_stock_locations` AS `stock_locations` ON `item_quantities`.`location_id` = `stock_locations`.`location_id`
WHERE `items`.`deleted` = 0
AND `items`.`stock_type` = 0
AND `stock_locations`.`deleted` = 0
ORDER BY `items`.`name`, `items`.`qty_per_pack` 
 Execution Time:0.0019900798797607

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0011608600616455

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00080394744873047

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'dnbegln895ijnpfv23k5252ntod9v55t'
AND `ip_address` = '::1' 
 Execution Time:0.00071501731872559

SELECT GET_LOCK('92e24b68e92c32ead78f9cc80e53193f', 300) AS ci_session_lock 
 Execution Time:0.000640869140625

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'dnbegln895ijnpfv23k5252ntod9v55t'
AND `ip_address` = '::1' 
 Execution Time:0.00078201293945312

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00076103210449219

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0009009838104248

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0011539459228516

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00067591667175293

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.00074195861816406

SHOW TABLES FROM `ospos` 
 Execution Time:0.0036749839782715

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00049114227294922

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00087189674377441

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0017459392547607

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0006260871887207

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00070905685424805

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00066089630126953

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00064492225646973

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'items%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.0010030269622803

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_suppliers`.`person_id` = `ospos_people`.`person_id`
WHERE `category` = 0
AND `deleted` = 0
ORDER BY `company_name` ASC 
 Execution Time:0.00072693824768066

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'dnbegln895ijnpfv23k5252ntod9v55t'
AND `ip_address` = '::1' 
 Execution Time:0.0014011859893799

SELECT GET_LOCK('92e24b68e92c32ead78f9cc80e53193f', 300) AS ci_session_lock 
 Execution Time:0.00037097930908203

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'dnbegln895ijnpfv23k5252ntod9v55t'
AND `ip_address` = '::1' 
 Execution Time:0.00051093101501465

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00093698501586914

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00064396858215332

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0010490417480469

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00063300132751465

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.00044703483581543

SHOW TABLES FROM `ospos` 
 Execution Time:0.0033330917358398

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00058698654174805

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0013577938079834

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00069117546081543

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00075602531433105

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00057697296142578

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00050210952758789

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00068497657775879

SELECT `items`.`name` AS `name`, `items`.`item_number`, `items`.`category`, `item_quantities`.`quantity`, (item_quantities.quantity * items.qty_per_pack) as low_sell_quantity, `items`.`reorder_level`, `stock_locations`.`location_name`, `items`.`cost_price`, `items`.`unit_price`, (items.cost_price * item_quantities.quantity) AS sub_total_value
FROM `ospos_items` AS `items`
JOIN `ospos_item_quantities` AS `item_quantities` ON `items`.`item_id` = `item_quantities`.`item_id`
JOIN `ospos_stock_locations` AS `stock_locations` ON `item_quantities`.`location_id` = `stock_locations`.`location_id`
WHERE `items`.`deleted` = 0
AND `items`.`stock_type` = 0
AND `stock_locations`.`deleted` = 0
ORDER BY `items`.`name`, `items`.`qty_per_pack` 
 Execution Time:0.0011649131774902

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00066590309143066

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00048613548278809

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'dnbegln895ijnpfv23k5252ntod9v55t'
AND `ip_address` = '::1' 
 Execution Time:0.00066614151000977

SELECT GET_LOCK('92e24b68e92c32ead78f9cc80e53193f', 300) AS ci_session_lock 
 Execution Time:0.00045609474182129

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'dnbegln895ijnpfv23k5252ntod9v55t'
AND `ip_address` = '::1' 
 Execution Time:0.00052499771118164

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00059080123901367

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0012140274047852

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0018250942230225

SHOW TABLES FROM `ospos` 
 Execution Time:0.0023701190948486

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0006260871887207

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.000762939453125

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00096583366394043

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0058479309082031

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00061607360839844

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00055789947509766

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.015154123306274

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1' 
 Execution Time:0.010331869125366

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.012833118438721

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_receivings'
 LIMIT 1 
 Execution Time:0.00472092628479

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_customers'
 LIMIT 1 
 Execution Time:0.0064349174499512

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_discounts'
 LIMIT 1 
 Execution Time:0.0056300163269043

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.0012791156768799

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_suppliers'
 LIMIT 1 
 Execution Time:0.0017609596252441

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_suppliersgls'
 LIMIT 1 
 Execution Time:0.00091195106506348

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.0004420280456543

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'dnbegln895ijnpfv23k5252ntod9v55t'
AND `ip_address` = '::1' 
 Execution Time:0.00065398216247559

SELECT GET_LOCK('92e24b68e92c32ead78f9cc80e53193f', 300) AS ci_session_lock 
 Execution Time:0.00040006637573242

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'dnbegln895ijnpfv23k5252ntod9v55t'
AND `ip_address` = '::1' 
 Execution Time:0.00051403045654297

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00093793869018555

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0010261535644531

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0014069080352783

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00189208984375

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.00061702728271484

SHOW TABLES FROM `ospos` 
 Execution Time:0.0079498291015625

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00049614906311035

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0010929107666016

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00086688995361328

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.000762939453125

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010039806365967

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0007789134979248

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0026490688323975

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'items%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.0032968521118164

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_suppliers`.`person_id` = `ospos_people`.`person_id`
WHERE `category` = 0
AND `deleted` = 0
ORDER BY `company_name` ASC 
 Execution Time:0.00070405006408691

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'dnbegln895ijnpfv23k5252ntod9v55t'
AND `ip_address` = '::1' 
 Execution Time:0.00065183639526367

SELECT GET_LOCK('92e24b68e92c32ead78f9cc80e53193f', 300) AS ci_session_lock 
 Execution Time:0.00059413909912109

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'dnbegln895ijnpfv23k5252ntod9v55t'
AND `ip_address` = '::1' 
 Execution Time:0.00089406967163086

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0075869560241699

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.063642024993896

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.050205945968628

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.029838800430298

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.0032570362091064

SHOW TABLES FROM `ospos` 
 Execution Time:0.037575006484985

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.014596939086914

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.004709005355835

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0009610652923584

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0014331340789795

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00074195861816406

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0013618469238281

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00085091590881348

SELECT `items`.`name` AS `name`, `items`.`item_number`, `items`.`category`, `item_quantities`.`quantity`, (item_quantities.quantity * items.qty_per_pack) as low_sell_quantity, `items`.`reorder_level`, `stock_locations`.`location_name`, `items`.`cost_price`, `items`.`unit_price`, (items.cost_price * item_quantities.quantity) AS sub_total_value
FROM `ospos_items` AS `items`
JOIN `ospos_item_quantities` AS `item_quantities` ON `items`.`item_id` = `item_quantities`.`item_id`
JOIN `ospos_stock_locations` AS `stock_locations` ON `item_quantities`.`location_id` = `stock_locations`.`location_id`
WHERE `items`.`deleted` = 0
AND `items`.`stock_type` = 0
AND `stock_locations`.`deleted` = 0
ORDER BY `items`.`name`, `items`.`qty_per_pack` 
 Execution Time:0.02697491645813

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.019143104553223

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0072219371795654

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'dnbegln895ijnpfv23k5252ntod9v55t'
AND `ip_address` = '::1' 
 Execution Time:0.0007331371307373

SELECT GET_LOCK('92e24b68e92c32ead78f9cc80e53193f', 300) AS ci_session_lock 
 Execution Time:0.00048398971557617

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'dnbegln895ijnpfv23k5252ntod9v55t'
AND `ip_address` = '::1' 
 Execution Time:0.0005490779876709

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00071597099304199

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00063920021057129

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0011849403381348

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00067615509033203

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.00050687789916992

SHOW TABLES FROM `ospos` 
 Execution Time:0.0046451091766357

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00055098533630371

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0011651515960693

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00072979927062988

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00074386596679688

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00058317184448242

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0005650520324707

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0065600872039795

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'items%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.0010459423065186

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_suppliers`.`person_id` = `ospos_people`.`person_id`
WHERE `category` = 0
AND `deleted` = 0
ORDER BY `company_name` ASC 
 Execution Time:0.001237154006958

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'dnbegln895ijnpfv23k5252ntod9v55t'
AND `ip_address` = '::1' 
 Execution Time:0.0008549690246582

SELECT GET_LOCK('92e24b68e92c32ead78f9cc80e53193f', 300) AS ci_session_lock 
 Execution Time:0.00097799301147461

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'dnbegln895ijnpfv23k5252ntod9v55t'
AND `ip_address` = '::1' 
 Execution Time:0.0012111663818359

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00071096420288086

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00065922737121582

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0030450820922852

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
 Execution Time:0.00048995018005371

SHOW TABLES FROM `ospos` 
 Execution Time:0.0040998458862305

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0004880428314209

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00063204765319824

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00081515312194824

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00075697898864746

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00069713592529297

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00064897537231445

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00071406364440918

SELECT `items`.`name` AS `name`, `items`.`item_number`, `items`.`category`, `item_quantities`.`quantity`, (item_quantities.quantity * items.qty_per_pack) as low_sell_quantity, `items`.`reorder_level`, `stock_locations`.`location_name`, `items`.`cost_price`, `items`.`unit_price`, (items.cost_price * item_quantities.quantity) AS sub_total_value
FROM `ospos_items` AS `items`
JOIN `ospos_item_quantities` AS `item_quantities` ON `items`.`item_id` = `item_quantities`.`item_id`
JOIN `ospos_stock_locations` AS `stock_locations` ON `item_quantities`.`location_id` = `stock_locations`.`location_id`
WHERE `items`.`deleted` = 0
AND `items`.`stock_type` = 0
AND `stock_locations`.`deleted` = 0
ORDER BY `items`.`name`, `items`.`qty_per_pack` 
 Execution Time:0.0045299530029297

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00068807601928711

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00064301490783691

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'dnbegln895ijnpfv23k5252ntod9v55t'
AND `ip_address` = '::1' 
 Execution Time:0.0033950805664062

SELECT GET_LOCK('92e24b68e92c32ead78f9cc80e53193f', 300) AS ci_session_lock 
 Execution Time:0.00059914588928223

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'dnbegln895ijnpfv23k5252ntod9v55t'
AND `ip_address` = '::1' 
 Execution Time:0.00062084197998047

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.002004861831665

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0011820793151855

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0016829967498779

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0011250972747803

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.00052380561828613

SHOW TABLES FROM `ospos` 
 Execution Time:0.006443977355957

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0021708011627197

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0018260478973389

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0032398700714111

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00095796585083008

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00088715553283691

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0007178783416748

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0086729526519775

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'items%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.045777082443237

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_suppliers`.`person_id` = `ospos_people`.`person_id`
WHERE `category` = 0
AND `deleted` = 0
ORDER BY `company_name` ASC 
 Execution Time:0.081123828887939

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'dnbegln895ijnpfv23k5252ntod9v55t'
AND `ip_address` = '::1' 
 Execution Time:0.00082015991210938

SELECT GET_LOCK('92e24b68e92c32ead78f9cc80e53193f', 300) AS ci_session_lock 
 Execution Time:0.00078487396240234

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'dnbegln895ijnpfv23k5252ntod9v55t'
AND `ip_address` = '::1' 
 Execution Time:0.00082182884216309

UPDATE `ospos_sessions` SET `timestamp` = 1698596832, `data` = '__ci_last_regenerate|i:1698596832;person_id|s:1:\"1\";menu_group|s:4:\"home\";'
WHERE `id` = 'dnbegln895ijnpfv23k5252ntod9v55t'
AND `ip_address` = '::1' 
 Execution Time:0.002694845199585

SELECT RELEASE_LOCK('92e24b68e92c32ead78f9cc80e53193f') AS ci_session_lock 
 Execution Time:0.00027203559875488

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'dnbegln895ijnpfv23k5252ntod9v55t'
AND `ip_address` = '::1' 
 Execution Time:0.00055503845214844

SELECT GET_LOCK('a41f1a57aa93c05f897953a5707c73ed', 300) AS ci_session_lock 
 Execution Time:0.00026297569274902

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'lv3vfcfpli84oehanck9i770cv4uj2dd'
AND `ip_address` = '::1' 
 Execution Time:0.00043201446533203

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0013020038604736

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00148606300354

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0010769367218018

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0034699440002441

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.0003969669342041

SHOW TABLES FROM `ospos` 
 Execution Time:0.0074009895324707

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00077390670776367

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0013489723205566

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0030620098114014

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00057697296142578

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00060200691223145

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00052714347839355

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00082111358642578

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'items%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.0015130043029785

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_suppliers`.`person_id` = `ospos_people`.`person_id`
WHERE `category` = 0
AND `deleted` = 0
ORDER BY `company_name` ASC 
 Execution Time:0.0009620189666748

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'lv3vfcfpli84oehanck9i770cv4uj2dd'
AND `ip_address` = '::1' 
 Execution Time:0.00071620941162109

SELECT GET_LOCK('a41f1a57aa93c05f897953a5707c73ed', 300) AS ci_session_lock 
 Execution Time:0.00039982795715332

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'lv3vfcfpli84oehanck9i770cv4uj2dd'
AND `ip_address` = '::1' 
 Execution Time:0.00054192543029785

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010302066802979

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0017938613891602

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0054330825805664

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010449886322021

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.00073385238647461

SHOW TABLES FROM `ospos` 
 Execution Time:0.021152973175049

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.025826930999756

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.06035304069519

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.014068841934204

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.012408018112183

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0017960071563721

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00091195106506348

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.036332130432129

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'items%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.041761875152588

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_suppliers`.`person_id` = `ospos_people`.`person_id`
WHERE `category` = 0
AND `deleted` = 0
ORDER BY `company_name` ASC 
 Execution Time:0.1131329536438

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'lv3vfcfpli84oehanck9i770cv4uj2dd'
AND `ip_address` = '::1' 
 Execution Time:0.00066184997558594

SELECT GET_LOCK('a41f1a57aa93c05f897953a5707c73ed', 300) AS ci_session_lock 
 Execution Time:0.0016400814056396

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'lv3vfcfpli84oehanck9i770cv4uj2dd'
AND `ip_address` = '::1' 
 Execution Time:0.0006260871887207

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00084400177001953

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00078105926513672

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0012681484222412

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00077700614929199

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.0005340576171875

SHOW TABLES FROM `ospos` 
 Execution Time:0.012856960296631

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00058388710021973

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0010309219360352

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.024934053421021

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.025691032409668

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.010550975799561

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0055241584777832

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.012026071548462

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'items%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.0014660358428955

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_suppliers`.`person_id` = `ospos_people`.`person_id`
WHERE `category` = 0
AND `deleted` = 0
ORDER BY `company_name` ASC 
 Execution Time:0.0013668537139893

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'lv3vfcfpli84oehanck9i770cv4uj2dd'
AND `ip_address` = '::1' 
 Execution Time:0.00087594985961914

SELECT GET_LOCK('a41f1a57aa93c05f897953a5707c73ed', 300) AS ci_session_lock 
 Execution Time:0.00088787078857422

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'lv3vfcfpli84oehanck9i770cv4uj2dd'
AND `ip_address` = '::1' 
 Execution Time:0.0010440349578857

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.001511812210083

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0023989677429199

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0095760822296143

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.021803855895996

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.0007169246673584

SHOW TABLES FROM `ospos` 
 Execution Time:0.032740831375122

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0066409111022949

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0014870166778564

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0015919208526611

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0005340576171875

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00066900253295898

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00038981437683105

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00074911117553711

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'items%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.00082993507385254

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_suppliers`.`person_id` = `ospos_people`.`person_id`
WHERE `category` = 0
AND `deleted` = 0
ORDER BY `company_name` ASC 
 Execution Time:0.00071597099304199

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'lv3vfcfpli84oehanck9i770cv4uj2dd'
AND `ip_address` = '::1' 
 Execution Time:0.0008847713470459

SELECT GET_LOCK('a41f1a57aa93c05f897953a5707c73ed', 300) AS ci_session_lock 
 Execution Time:0.00039100646972656

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'lv3vfcfpli84oehanck9i770cv4uj2dd'
AND `ip_address` = '::1' 
 Execution Time:0.00065517425537109

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00089406967163086

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00093793869018555

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.001378059387207

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0015847682952881

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.0042200088500977

SHOW TABLES FROM `ospos` 
 Execution Time:0.0075299739837646

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00059604644775391

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0010130405426025

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0020298957824707

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0031349658966064

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00060486793518066

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0008549690246582

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0024011135101318

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'items%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.0052628517150879

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_suppliers`.`person_id` = `ospos_people`.`person_id`
WHERE `category` = 0
AND `deleted` = 0
ORDER BY `company_name` ASC 
 Execution Time:0.0012500286102295

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'lv3vfcfpli84oehanck9i770cv4uj2dd'
AND `ip_address` = '::1' 
 Execution Time:0.00077486038208008

SELECT GET_LOCK('a41f1a57aa93c05f897953a5707c73ed', 300) AS ci_session_lock 
 Execution Time:0.00029802322387695

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'lv3vfcfpli84oehanck9i770cv4uj2dd'
AND `ip_address` = '::1' 
 Execution Time:0.00044083595275879

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.019455909729004

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00092411041259766

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0013408660888672

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.028308153152466

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.0078301429748535

SHOW TABLES FROM `ospos` 
 Execution Time:0.0063738822937012

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0020179748535156

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0027050971984863

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010130405426025

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0019760131835938

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0012218952178955

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0042421817779541

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.010603904724121

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'items%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.025311946868896

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_suppliers`.`person_id` = `ospos_people`.`person_id`
WHERE `category` = 0
AND `deleted` = 0
ORDER BY `company_name` ASC 
 Execution Time:0.031053066253662

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'lv3vfcfpli84oehanck9i770cv4uj2dd'
AND `ip_address` = '::1' 
 Execution Time:0.00092387199401855

SELECT GET_LOCK('a41f1a57aa93c05f897953a5707c73ed', 300) AS ci_session_lock 
 Execution Time:0.00044798851013184

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'lv3vfcfpli84oehanck9i770cv4uj2dd'
AND `ip_address` = '::1' 
 Execution Time:0.00058889389038086

UPDATE `ospos_sessions` SET `timestamp` = 1698597193, `data` = '__ci_last_regenerate|i:1698597193;person_id|s:1:\"1\";menu_group|s:4:\"home\";'
WHERE `id` = 'lv3vfcfpli84oehanck9i770cv4uj2dd'
AND `ip_address` = '::1' 
 Execution Time:0.003931999206543

SELECT RELEASE_LOCK('a41f1a57aa93c05f897953a5707c73ed') AS ci_session_lock 
 Execution Time:0.00033903121948242

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'lv3vfcfpli84oehanck9i770cv4uj2dd'
AND `ip_address` = '::1' 
 Execution Time:0.0005497932434082

SELECT GET_LOCK('b4f7c679bdb2897e9bee420cdd245cad', 300) AS ci_session_lock 
 Execution Time:0.00030684471130371

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'gkk756u3rcs0i25hslcsk190cqik2ntd'
AND `ip_address` = '::1' 
 Execution Time:0.00053000450134277

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00071406364440918

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00077009201049805

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0017681121826172

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00075292587280273

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.00057291984558105

SHOW TABLES FROM `ospos` 
 Execution Time:0.0051169395446777

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00055980682373047

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0010228157043457

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00065398216247559

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00065517425537109

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00070810317993164

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00057101249694824

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00067496299743652

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'items%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.0010089874267578

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_suppliers`.`person_id` = `ospos_people`.`person_id`
WHERE `category` = 0
AND `deleted` = 0
ORDER BY `company_name` ASC 
 Execution Time:0.00083613395690918

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'gkk756u3rcs0i25hslcsk190cqik2ntd'
AND `ip_address` = '::1' 
 Execution Time:0.0013411045074463

SELECT GET_LOCK('b4f7c679bdb2897e9bee420cdd245cad', 300) AS ci_session_lock 
 Execution Time:0.0010418891906738

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'gkk756u3rcs0i25hslcsk190cqik2ntd'
AND `ip_address` = '::1' 
 Execution Time:0.00068092346191406

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00085091590881348

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.001039981842041

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0011389255523682

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00062799453735352

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.000701904296875

SHOW TABLES FROM `ospos` 
 Execution Time:0.0043811798095703

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00046610832214355

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00062990188598633

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00062298774719238

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00056314468383789

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00047612190246582

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00049901008605957

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0006098747253418

SELECT `items`.`name` AS `name`, `items`.`item_number`, `items`.`category`, `item_quantities`.`quantity`, (item_quantities.quantity * items.qty_per_pack) as low_sell_quantity, `items`.`reorder_level`, `stock_locations`.`location_name`, `items`.`cost_price`, `items`.`unit_price`, (items.cost_price * item_quantities.quantity) AS sub_total_value
FROM `ospos_items` AS `items`
JOIN `ospos_item_quantities` AS `item_quantities` ON `items`.`item_id` = `item_quantities`.`item_id`
JOIN `ospos_stock_locations` AS `stock_locations` ON `item_quantities`.`location_id` = `stock_locations`.`location_id`
WHERE `items`.`deleted` = 0
AND `items`.`stock_type` = 0
AND `stock_locations`.`deleted` = 0
ORDER BY `items`.`name`, `items`.`qty_per_pack` 
 Execution Time:0.0020489692687988

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0015828609466553

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.001795768737793

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'gkk756u3rcs0i25hslcsk190cqik2ntd'
AND `ip_address` = '::1' 
 Execution Time:0.00096797943115234

SELECT GET_LOCK('b4f7c679bdb2897e9bee420cdd245cad', 300) AS ci_session_lock 
 Execution Time:0.00064611434936523

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'gkk756u3rcs0i25hslcsk190cqik2ntd'
AND `ip_address` = '::1' 
 Execution Time:0.00067806243896484

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00061202049255371

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00068807601928711

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0012898445129395

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00069189071655273

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.0004570484161377

SHOW TABLES FROM `ospos` 
 Execution Time:0.0046370029449463

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0015799999237061

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0024468898773193

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0011789798736572

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00069403648376465

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00053811073303223

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00059413909912109

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0007178783416748

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'items%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.0012800693511963

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_suppliers`.`person_id` = `ospos_people`.`person_id`
WHERE `category` = 0
AND `deleted` = 0
ORDER BY `company_name` ASC 
 Execution Time:0.00078988075256348

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'gkk756u3rcs0i25hslcsk190cqik2ntd'
AND `ip_address` = '::1' 
 Execution Time:0.00069594383239746

SELECT GET_LOCK('b4f7c679bdb2897e9bee420cdd245cad', 300) AS ci_session_lock 
 Execution Time:0.00042319297790527

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'gkk756u3rcs0i25hslcsk190cqik2ntd'
AND `ip_address` = '::1' 
 Execution Time:0.000701904296875

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00079894065856934

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
 Execution Time:0.0010631084442139

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0007481575012207

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.00048398971557617

SHOW TABLES FROM `ospos` 
 Execution Time:0.0048568248748779

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00054192543029785

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00066804885864258

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00069093704223633

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00075602531433105

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0011458396911621

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00071001052856445

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00071620941162109

SELECT `items`.`name` AS `name`, `items`.`item_number`, `items`.`category`, `item_quantities`.`quantity`, (item_quantities.quantity * items.qty_per_pack) as low_sell_quantity, `items`.`reorder_level`, `stock_locations`.`location_name`, `items`.`cost_price`, `items`.`unit_price`, (items.cost_price * item_quantities.quantity) AS sub_total_value
FROM `ospos_items` AS `items`
JOIN `ospos_item_quantities` AS `item_quantities` ON `items`.`item_id` = `item_quantities`.`item_id`
JOIN `ospos_stock_locations` AS `stock_locations` ON `item_quantities`.`location_id` = `stock_locations`.`location_id`
WHERE `items`.`deleted` = 0
AND `items`.`stock_type` = 0
AND `stock_locations`.`deleted` = 0
ORDER BY `items`.`name`, `items`.`qty_per_pack` 
 Execution Time:0.001284122467041

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00076508522033691

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00086498260498047

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'gkk756u3rcs0i25hslcsk190cqik2ntd'
AND `ip_address` = '::1' 
 Execution Time:0.00074505805969238

SELECT GET_LOCK('b4f7c679bdb2897e9bee420cdd245cad', 300) AS ci_session_lock 
 Execution Time:0.0004429817199707

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'gkk756u3rcs0i25hslcsk190cqik2ntd'
AND `ip_address` = '::1' 
 Execution Time:0.0010359287261963

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00074195861816406

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00067591667175293

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0014150142669678

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0006558895111084

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.00059795379638672

SHOW TABLES FROM `ospos` 
 Execution Time:0.0035760402679443

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0026431083679199

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0010840892791748

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00075387954711914

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00061607360839844

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00067400932312012

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00057792663574219

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0007929801940918

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'items%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.0012199878692627

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_suppliers`.`person_id` = `ospos_people`.`person_id`
WHERE `category` = 0
AND `deleted` = 0
ORDER BY `company_name` ASC 
 Execution Time:0.00075697898864746

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'gkk756u3rcs0i25hslcsk190cqik2ntd'
AND `ip_address` = '::1' 
 Execution Time:0.00073981285095215

SELECT GET_LOCK('b4f7c679bdb2897e9bee420cdd245cad', 300) AS ci_session_lock 
 Execution Time:0.00033903121948242

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'gkk756u3rcs0i25hslcsk190cqik2ntd'
AND `ip_address` = '::1' 
 Execution Time:0.00049686431884766

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0046141147613525

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.011435985565186

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.001086950302124

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00047516822814941

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.00035619735717773

SHOW TABLES FROM `ospos` 
 Execution Time:0.0035820007324219

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00055885314941406

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00067591667175293

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0081901550292969

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.007688045501709

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0079741477966309

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0053579807281494

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.028256177902222

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'items%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.0079400539398193

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_suppliers`.`person_id` = `ospos_people`.`person_id`
WHERE `category` = 0
AND `deleted` = 0
ORDER BY `company_name` ASC 
 Execution Time:0.0030889511108398

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'gkk756u3rcs0i25hslcsk190cqik2ntd'
AND `ip_address` = '::1' 
 Execution Time:0.00085711479187012

SELECT GET_LOCK('b4f7c679bdb2897e9bee420cdd245cad', 300) AS ci_session_lock 
 Execution Time:0.00032186508178711

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'gkk756u3rcs0i25hslcsk190cqik2ntd'
AND `ip_address` = '::1' 
 Execution Time:0.00069713592529297

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00083208084106445

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00096893310546875

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0016810894012451

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00074291229248047

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.00063395500183105

SHOW TABLES FROM `ospos` 
 Execution Time:0.031648874282837

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.028521060943604

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0047719478607178

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.011636018753052

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0084078311920166

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.038353204727173

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.047197103500366

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.003183126449585

SELECT `items`.`name` AS `name`, `items`.`item_number`, `items`.`category`, `item_quantities`.`quantity`, (item_quantities.quantity * items.qty_per_pack) as low_sell_quantity, `items`.`reorder_level`, `stock_locations`.`location_name`, `items`.`cost_price`, `items`.`unit_price`, (items.cost_price * item_quantities.quantity) AS sub_total_value
FROM `ospos_items` AS `items`
JOIN `ospos_item_quantities` AS `item_quantities` ON `items`.`item_id` = `item_quantities`.`item_id`
JOIN `ospos_stock_locations` AS `stock_locations` ON `item_quantities`.`location_id` = `stock_locations`.`location_id`
WHERE `items`.`deleted` = 0
AND `items`.`stock_type` = 0
AND `stock_locations`.`deleted` = 0
AND `items`.`supplier_id` IS NULL
ORDER BY `items`.`name`, `items`.`qty_per_pack` 
 Execution Time:0.0042309761047363

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00077199935913086

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00066113471984863

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'gkk756u3rcs0i25hslcsk190cqik2ntd'
AND `ip_address` = '::1' 
 Execution Time:0.0007469654083252

SELECT GET_LOCK('b4f7c679bdb2897e9bee420cdd245cad', 300) AS ci_session_lock 
 Execution Time:0.00040888786315918

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'gkk756u3rcs0i25hslcsk190cqik2ntd'
AND `ip_address` = '::1' 
 Execution Time:0.00060200691223145

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00078201293945312

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00076103210449219

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.001288890838623

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00066089630126953

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.00051999092102051

SHOW TABLES FROM `ospos` 
 Execution Time:0.0037569999694824

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0005958080291748

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00080299377441406

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00070309638977051

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00072193145751953

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0030200481414795

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00081777572631836

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00066995620727539

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'items%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.0017001628875732

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_suppliers`.`person_id` = `ospos_people`.`person_id`
WHERE `category` = 0
AND `deleted` = 0
ORDER BY `company_name` ASC 
 Execution Time:0.00082898139953613

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'gkk756u3rcs0i25hslcsk190cqik2ntd'
AND `ip_address` = '::1' 
 Execution Time:0.00087618827819824

SELECT GET_LOCK('b4f7c679bdb2897e9bee420cdd245cad', 300) AS ci_session_lock 
 Execution Time:0.00052714347839355

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'gkk756u3rcs0i25hslcsk190cqik2ntd'
AND `ip_address` = '::1' 
 Execution Time:0.00077700614929199

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00078201293945312

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0008080005645752

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0027680397033691

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.001230001449585

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.00042510032653809

SHOW TABLES FROM `ospos` 
 Execution Time:0.0064859390258789

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00047183036804199

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00058507919311523

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.001230001449585

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00063395500183105

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0004580020904541

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00065898895263672

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00076889991760254

SELECT `items`.`name` AS `name`, `items`.`item_number`, `items`.`category`, `item_quantities`.`quantity`, (item_quantities.quantity * items.qty_per_pack) as low_sell_quantity, `items`.`reorder_level`, `stock_locations`.`location_name`, `items`.`cost_price`, `items`.`unit_price`, (items.cost_price * item_quantities.quantity) AS sub_total_value
FROM `ospos_items` AS `items`
JOIN `ospos_item_quantities` AS `item_quantities` ON `items`.`item_id` = `item_quantities`.`item_id`
JOIN `ospos_stock_locations` AS `stock_locations` ON `item_quantities`.`location_id` = `stock_locations`.`location_id`
WHERE `items`.`deleted` = 0
AND `items`.`stock_type` = 0
AND `stock_locations`.`deleted` = 0
AND `items`.`supplier_id` IS NULL
ORDER BY `items`.`name`, `items`.`qty_per_pack` 
 Execution Time:0.0011711120605469

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0054070949554443

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0014510154724121

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'gkk756u3rcs0i25hslcsk190cqik2ntd'
AND `ip_address` = '::1' 
 Execution Time:0.0007481575012207

SELECT GET_LOCK('b4f7c679bdb2897e9bee420cdd245cad', 300) AS ci_session_lock 
 Execution Time:0.00039505958557129

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'gkk756u3rcs0i25hslcsk190cqik2ntd'
AND `ip_address` = '::1' 
 Execution Time:0.00093793869018555

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00105881690979

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00099015235900879

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0010747909545898

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00062298774719238

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.00054788589477539

SHOW TABLES FROM `ospos` 
 Execution Time:0.0042588710784912

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00099515914916992

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0023031234741211

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0030550956726074

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00070905685424805

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.001154899597168

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0009160041809082

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00088286399841309

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'items%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.00084018707275391

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_suppliers`.`person_id` = `ospos_people`.`person_id`
WHERE `category` = 0
AND `deleted` = 0
ORDER BY `company_name` ASC 
 Execution Time:0.0010600090026855

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'gkk756u3rcs0i25hslcsk190cqik2ntd'
AND `ip_address` = '::1' 
 Execution Time:0.00067901611328125

SELECT GET_LOCK('b4f7c679bdb2897e9bee420cdd245cad', 300) AS ci_session_lock 
 Execution Time:0.00084590911865234

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'gkk756u3rcs0i25hslcsk190cqik2ntd'
AND `ip_address` = '::1' 
 Execution Time:0.00097203254699707

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00069308280944824

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0008399486541748

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0026030540466309

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010309219360352

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.00053310394287109

SHOW TABLES FROM `ospos` 
 Execution Time:0.0042989253997803

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00048685073852539

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00052118301391602

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00072503089904785

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00074410438537598

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00051498413085938

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00049781799316406

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00062203407287598

SELECT `items`.`name` AS `name`, `items`.`item_number`, `items`.`category`, `item_quantities`.`quantity`, (item_quantities.quantity * items.qty_per_pack) as low_sell_quantity, `items`.`reorder_level`, `stock_locations`.`location_name`, `items`.`cost_price`, `items`.`unit_price`, (items.cost_price * item_quantities.quantity) AS sub_total_value
FROM `ospos_items` AS `items`
JOIN `ospos_item_quantities` AS `item_quantities` ON `items`.`item_id` = `item_quantities`.`item_id`
JOIN `ospos_stock_locations` AS `stock_locations` ON `item_quantities`.`location_id` = `stock_locations`.`location_id`
WHERE `items`.`deleted` = 0
AND `items`.`stock_type` = 0
AND `stock_locations`.`deleted` = 0
AND `items`.`supplier_id` IS NULL
ORDER BY `items`.`name`, `items`.`qty_per_pack` 
 Execution Time:0.0014798641204834

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0006721019744873

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00068497657775879

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'gkk756u3rcs0i25hslcsk190cqik2ntd'
AND `ip_address` = '::1' 
 Execution Time:0.00087785720825195

SELECT GET_LOCK('b4f7c679bdb2897e9bee420cdd245cad', 300) AS ci_session_lock 
 Execution Time:0.0003969669342041

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'gkk756u3rcs0i25hslcsk190cqik2ntd'
AND `ip_address` = '::1' 
 Execution Time:0.00095605850219727

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0027761459350586

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.02000093460083

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.020810127258301

SHOW TABLES FROM `ospos` 
 Execution Time:0.012459993362427

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00075697898864746

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.001643180847168

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0066239833831787

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0041298866271973

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00081706047058105

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010511875152588

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.013150215148926

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1' 
 Execution Time:0.017632961273193

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.019046068191528

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_receivings'
 LIMIT 1 
 Execution Time:0.010331869125366

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_customers'
 LIMIT 1 
 Execution Time:0.0025849342346191

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_discounts'
 LIMIT 1 
 Execution Time:0.008004903793335

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.023504972457886

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_suppliers'
 LIMIT 1 
 Execution Time:0.0093228816986084

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_suppliersgls'
 LIMIT 1 
 Execution Time:0.016928911209106

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.0018479824066162

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'gkk756u3rcs0i25hslcsk190cqik2ntd'
AND `ip_address` = '::1' 
 Execution Time:0.00059199333190918

SELECT GET_LOCK('b4f7c679bdb2897e9bee420cdd245cad', 300) AS ci_session_lock 
 Execution Time:0.00039196014404297

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'gkk756u3rcs0i25hslcsk190cqik2ntd'
AND `ip_address` = '::1' 
 Execution Time:0.00056004524230957

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.031758785247803

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.014997005462646

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0012209415435791

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00059795379638672

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.00066804885864258

SHOW TABLES FROM `ospos` 
 Execution Time:0.0058610439300537

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00064396858215332

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00092983245849609

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.021229028701782

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.01343297958374

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.001535177230835

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0012490749359131

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.015805959701538

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'items%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.022531986236572

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_suppliers`.`person_id` = `ospos_people`.`person_id`
WHERE `category` = 0
AND `deleted` = 0
ORDER BY `company_name` ASC 
 Execution Time:0.049959182739258

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'gkk756u3rcs0i25hslcsk190cqik2ntd'
AND `ip_address` = '::1' 
 Execution Time:0.0011610984802246

SELECT GET_LOCK('b4f7c679bdb2897e9bee420cdd245cad', 300) AS ci_session_lock 
 Execution Time:0.00042414665222168

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'gkk756u3rcs0i25hslcsk190cqik2ntd'
AND `ip_address` = '::1' 
 Execution Time:0.00081181526184082

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0050048828125

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0074279308319092

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0090157985687256

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0061860084533691

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.0070841312408447

SHOW TABLES FROM `ospos` 
 Execution Time:0.0065429210662842

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00044703483581543

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00060606002807617

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0097310543060303

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.008296012878418

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0046031475067139

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010089874267578

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0025119781494141

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'items%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.0012290477752686

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_suppliers`.`person_id` = `ospos_people`.`person_id`
WHERE `category` = 0
AND `deleted` = 0
ORDER BY `company_name` ASC 
 Execution Time:0.00098395347595215

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'gkk756u3rcs0i25hslcsk190cqik2ntd'
AND `ip_address` = '::1' 
 Execution Time:0.00099492073059082

SELECT GET_LOCK('b4f7c679bdb2897e9bee420cdd245cad', 300) AS ci_session_lock 
 Execution Time:0.00046706199645996

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'gkk756u3rcs0i25hslcsk190cqik2ntd'
AND `ip_address` = '::1' 
 Execution Time:0.0012929439544678

UPDATE `ospos_sessions` SET `timestamp` = 1698597636, `data` = '__ci_last_regenerate|i:1698597636;person_id|s:1:\"1\";menu_group|s:4:\"home\";'
WHERE `id` = 'gkk756u3rcs0i25hslcsk190cqik2ntd'
AND `ip_address` = '::1' 
 Execution Time:0.0045809745788574

SELECT RELEASE_LOCK('b4f7c679bdb2897e9bee420cdd245cad') AS ci_session_lock 
 Execution Time:0.00033903121948242

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'gkk756u3rcs0i25hslcsk190cqik2ntd'
AND `ip_address` = '::1' 
 Execution Time:0.00061988830566406

SELECT GET_LOCK('f8766d78c6fa6a16b164a09a3c272260', 300) AS ci_session_lock 
 Execution Time:0.00028705596923828

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '8tq14ji1buc9q6t42me2uqvuu94cqogk'
AND `ip_address` = '::1' 
 Execution Time:0.00060796737670898

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00063395500183105

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00063896179199219

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0013360977172852

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00061702728271484

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.00044798851013184

SHOW TABLES FROM `ospos` 
 Execution Time:0.0047070980072021

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00066685676574707

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0021419525146484

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0018339157104492

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00079488754272461

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00047111511230469

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0006110668182373

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0015790462493896

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'items%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.0012581348419189

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_suppliers`.`person_id` = `ospos_people`.`person_id`
WHERE `category` = 0
AND `deleted` = 0
ORDER BY `company_name` ASC 
 Execution Time:0.0011930465698242

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '8tq14ji1buc9q6t42me2uqvuu94cqogk'
AND `ip_address` = '::1' 
 Execution Time:0.0018141269683838

SELECT GET_LOCK('f8766d78c6fa6a16b164a09a3c272260', 300) AS ci_session_lock 
 Execution Time:0.00046896934509277

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '8tq14ji1buc9q6t42me2uqvuu94cqogk'
AND `ip_address` = '::1' 
 Execution Time:0.00095605850219727

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00073099136352539

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0011210441589355

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00097107887268066

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00061511993408203

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.00063300132751465

SHOW TABLES FROM `ospos` 
 Execution Time:0.004680871963501

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00059604644775391

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0010819435119629

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00076198577880859

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00080609321594238

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0012140274047852

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0014338493347168

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.001471996307373

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'items%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.0027010440826416

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_suppliers`.`person_id` = `ospos_people`.`person_id`
WHERE `category` = 0
AND `deleted` = 0
ORDER BY `company_name` ASC 
 Execution Time:0.002842903137207

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '8tq14ji1buc9q6t42me2uqvuu94cqogk'
AND `ip_address` = '::1' 
 Execution Time:0.00064706802368164

SELECT GET_LOCK('f8766d78c6fa6a16b164a09a3c272260', 300) AS ci_session_lock 
 Execution Time:0.00035619735717773

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '8tq14ji1buc9q6t42me2uqvuu94cqogk'
AND `ip_address` = '::1' 
 Execution Time:0.00059080123901367

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0017399787902832

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0064971446990967

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0012609958648682

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010299682617188

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.00056600570678711

SHOW TABLES FROM `ospos` 
 Execution Time:0.0028588771820068

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00047397613525391

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0005180835723877

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00064206123352051

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00066995620727539

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0017950534820557

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00097084045410156

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00067806243896484

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'items%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.0018022060394287

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_suppliers`.`person_id` = `ospos_people`.`person_id`
WHERE `category` = 0
AND `deleted` = 0
ORDER BY `company_name` ASC 
 Execution Time:0.0011391639709473

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '8tq14ji1buc9q6t42me2uqvuu94cqogk'
AND `ip_address` = '::1' 
 Execution Time:0.0010972023010254

SELECT GET_LOCK('f8766d78c6fa6a16b164a09a3c272260', 300) AS ci_session_lock 
 Execution Time:0.00042605400085449

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '8tq14ji1buc9q6t42me2uqvuu94cqogk'
AND `ip_address` = '::1' 
 Execution Time:0.00069403648376465

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0013489723205566

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0014410018920898

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.001600980758667

SHOW TABLES FROM `ospos` 
 Execution Time:0.0045690536499023

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0016958713531494

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0017938613891602

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00080299377441406

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00058984756469727

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00051593780517578

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00093507766723633

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0012929439544678

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1' 
 Execution Time:0.00063419342041016

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00059700012207031

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_receivings'
 LIMIT 1 
 Execution Time:0.00059604644775391

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_customers'
 LIMIT 1 
 Execution Time:0.00080299377441406

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_discounts'
 LIMIT 1 
 Execution Time:0.00042295455932617

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.00074911117553711

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_suppliers'
 LIMIT 1 
 Execution Time:0.00041890144348145

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_suppliersgls'
 LIMIT 1 
 Execution Time:0.00063896179199219

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.00046300888061523

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '8tq14ji1buc9q6t42me2uqvuu94cqogk'
AND `ip_address` = '::1' 
 Execution Time:0.00081682205200195

SELECT GET_LOCK('f8766d78c6fa6a16b164a09a3c272260', 300) AS ci_session_lock 
 Execution Time:0.00073409080505371

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '8tq14ji1buc9q6t42me2uqvuu94cqogk'
AND `ip_address` = '::1' 
 Execution Time:0.0013518333435059

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0084309577941895

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0012581348419189

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0026710033416748

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.029425144195557

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.0018410682678223

SHOW TABLES FROM `ospos` 
 Execution Time:0.017291784286499

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0094048976898193

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0031039714813232

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.015717029571533

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0019450187683105

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.02455997467041

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0007328987121582

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0017309188842773

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'items%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.0013339519500732

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_suppliers`.`person_id` = `ospos_people`.`person_id`
WHERE `category` = 0
AND `deleted` = 0
ORDER BY `company_name` ASC 
 Execution Time:0.00086784362792969

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '8tq14ji1buc9q6t42me2uqvuu94cqogk'
AND `ip_address` = '::1' 
 Execution Time:0.0010049343109131

SELECT GET_LOCK('f8766d78c6fa6a16b164a09a3c272260', 300) AS ci_session_lock 
 Execution Time:0.00043106079101562

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '8tq14ji1buc9q6t42me2uqvuu94cqogk'
AND `ip_address` = '::1' 
 Execution Time:0.00073909759521484

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0034701824188232

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0023560523986816

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0013179779052734

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00078988075256348

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.0005800724029541

SHOW TABLES FROM `ospos` 
 Execution Time:0.0063581466674805

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00058889389038086

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0011789798736572

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0016582012176514

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00052213668823242

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0012140274047852

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00059008598327637

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0025079250335693

SELECT `items`.`name` AS `name`, `items`.`item_number`, `items`.`category`, `item_quantities`.`quantity`, (item_quantities.quantity * items.qty_per_pack) as low_sell_quantity, `items`.`reorder_level`, `stock_locations`.`location_name`, `items`.`cost_price`, `items`.`unit_price`, (items.cost_price * item_quantities.quantity) AS sub_total_value
FROM `ospos_items` AS `items`
JOIN `ospos_item_quantities` AS `item_quantities` ON `items`.`item_id` = `item_quantities`.`item_id`
JOIN `ospos_stock_locations` AS `stock_locations` ON `item_quantities`.`location_id` = `stock_locations`.`location_id`
WHERE `items`.`deleted` = 0
AND `items`.`stock_type` = 0
AND `stock_locations`.`deleted` = 0
ORDER BY `items`.`name`, `items`.`qty_per_pack` 
 Execution Time:0.0010688304901123

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00073885917663574

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00071501731872559

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '8tq14ji1buc9q6t42me2uqvuu94cqogk'
AND `ip_address` = '::1' 
 Execution Time:0.00072121620178223

SELECT GET_LOCK('f8766d78c6fa6a16b164a09a3c272260', 300) AS ci_session_lock 
 Execution Time:0.00038695335388184

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '8tq14ji1buc9q6t42me2uqvuu94cqogk'
AND `ip_address` = '::1' 
 Execution Time:0.00067400932312012

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00092816352844238

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00080513954162598

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.001223087310791

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010750293731689

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.00049614906311035

SHOW TABLES FROM `ospos` 
 Execution Time:0.0092670917510986

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00046896934509277

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0006411075592041

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.078925132751465

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0085880756378174

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0015599727630615

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00053000450134277

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.026893854141235

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'items%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.004019021987915

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_suppliers`.`person_id` = `ospos_people`.`person_id`
WHERE `category` = 0
AND `deleted` = 0
ORDER BY `company_name` ASC 
 Execution Time:0.0065810680389404

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '8tq14ji1buc9q6t42me2uqvuu94cqogk'
AND `ip_address` = '::1' 
 Execution Time:0.00063896179199219

SELECT GET_LOCK('f8766d78c6fa6a16b164a09a3c272260', 300) AS ci_session_lock 
 Execution Time:0.00045084953308105

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '8tq14ji1buc9q6t42me2uqvuu94cqogk'
AND `ip_address` = '::1' 
 Execution Time:0.00077199935913086

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00070881843566895

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00063395500183105

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0011250972747803

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010111331939697

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.00072503089904785

SHOW TABLES FROM `ospos` 
 Execution Time:0.0031330585479736

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00069785118103027

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00057697296142578

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00071001052856445

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00074195861816406

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00053501129150391

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00052714347839355

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00066685676574707

SELECT `items`.`name` AS `name`, `items`.`item_number`, `items`.`category`, `item_quantities`.`quantity`, (item_quantities.quantity * items.qty_per_pack) as low_sell_quantity, `items`.`reorder_level`, `stock_locations`.`location_name`, `items`.`cost_price`, `items`.`unit_price`, (items.cost_price * item_quantities.quantity) AS sub_total_value
FROM `ospos_items` AS `items`
JOIN `ospos_item_quantities` AS `item_quantities` ON `items`.`item_id` = `item_quantities`.`item_id`
JOIN `ospos_stock_locations` AS `stock_locations` ON `item_quantities`.`location_id` = `stock_locations`.`location_id`
WHERE `items`.`deleted` = 0
AND `items`.`stock_type` = 0
AND `stock_locations`.`deleted` = 0
ORDER BY `items`.`name`, `items`.`qty_per_pack` 
 Execution Time:0.0017509460449219

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0006868839263916

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00087809562683105

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'nijoqqra44cgnkmdd33gqlsqfde12o05'
AND `ip_address` = '::1' 
 Execution Time:0.0043261051177979

SELECT GET_LOCK('c5d0f5cafc907c1b5ed99cd2bc5512bc', 300) AS ci_session_lock 
 Execution Time:0.00037503242492676

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'nijoqqra44cgnkmdd33gqlsqfde12o05'
AND `ip_address` = '::1' 
 Execution Time:0.00061297416687012

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00071501731872559

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00072598457336426

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0013859272003174

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00070095062255859

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.00045895576477051

SHOW TABLES FROM `ospos` 
 Execution Time:0.0043230056762695

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00051498413085938

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0022048950195312

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0099990367889404

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.083121061325073

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.077666044235229

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.021668910980225

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.15166091918945

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'items%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.0062711238861084

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_suppliers`.`person_id` = `ospos_people`.`person_id`
WHERE `category` = 0
AND `deleted` = 0
ORDER BY `company_name` ASC 
 Execution Time:0.0061099529266357

