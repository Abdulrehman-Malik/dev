SELECT GET_LOCK('d3bddbfe0ca8fd767cbd3f1153858aa1', 300) AS ci_session_lock 
 Execution Time:0.00094509124755859

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'bv2e21s9gbkdaj9dtpdarc99h9ckce35'
AND `ip_address` = '::1' 
 Execution Time:0.19496202468872

SHOW TABLES FROM `ospos` 
 Execution Time:0.16200995445251

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.029309034347534

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.037647008895874

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'company_logo'
 LIMIT 1 
 Execution Time:0.057168006896973

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.10190916061401

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'bv2e21s9gbkdaj9dtpdarc99h9ckce35'
AND `ip_address` = '::1' 
 Execution Time:0.00067496299743652

SELECT GET_LOCK('d3bddbfe0ca8fd767cbd3f1153858aa1', 300) AS ci_session_lock 
 Execution Time:0.00035309791564941

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'bv2e21s9gbkdaj9dtpdarc99h9ckce35'
AND `ip_address` = '::1' 
 Execution Time:0.00057196617126465

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.15828919410706

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE '%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.17573618888855

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.20527696609497

SHOW TABLES FROM `ospos` 
 Execution Time:0.062153100967407

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.017714023590088

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.034557104110718

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.018558025360107

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00063300132751465

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0015971660614014

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00076603889465332

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.032390117645264

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'bv2e21s9gbkdaj9dtpdarc99h9ckce35'
AND `ip_address` = '::1' 
 Execution Time:0.0014359951019287

SELECT GET_LOCK('d3bddbfe0ca8fd767cbd3f1153858aa1', 300) AS ci_session_lock 
 Execution Time:0.0043380260467529

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'bv2e21s9gbkdaj9dtpdarc99h9ckce35'
AND `ip_address` = '::1' 
 Execution Time:0.0062029361724854

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00090217590332031

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'receivings%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0008540153503418

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0016849040985107

SHOW TABLES FROM `ospos` 
 Execution Time:0.0065290927886963

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00057291984558105

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0010530948638916

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00073599815368652

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00055503845214844

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0035970211029053

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0016450881958008

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00076889991760254

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'receivings%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.021450996398926

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00058603286743164

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'items'
 LIMIT 1 
 Execution Time:0.0003349781036377

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'bv2e21s9gbkdaj9dtpdarc99h9ckce35'
AND `ip_address` = '::1' 
 Execution Time:0.00059604644775391

SELECT GET_LOCK('d3bddbfe0ca8fd767cbd3f1153858aa1', 300) AS ci_session_lock 
 Execution Time:0.00032806396484375

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'bv2e21s9gbkdaj9dtpdarc99h9ckce35'
AND `ip_address` = '::1' 
 Execution Time:0.00042200088500977

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0013031959533691

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'receivings%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00078415870666504

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00095295906066895

SHOW TABLES FROM `ospos` 
 Execution Time:0.0038049221038818

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00040292739868164

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00087809562683105

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.001352071762085

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00067496299743652

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00074291229248047

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00040292739868164

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0005800724029541

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'receivings%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.0023860931396484

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0012328624725342

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'items'
 LIMIT 1 
 Execution Time:0.00062894821166992

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'bv2e21s9gbkdaj9dtpdarc99h9ckce35'
AND `ip_address` = '::1' 
 Execution Time:0.0006251335144043

SELECT GET_LOCK('d3bddbfe0ca8fd767cbd3f1153858aa1', 300) AS ci_session_lock 
 Execution Time:0.00032901763916016

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'bv2e21s9gbkdaj9dtpdarc99h9ckce35'
AND `ip_address` = '::1' 
 Execution Time:0.00046491622924805

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00061607360839844

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'receivings%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00052309036254883

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0010969638824463

SHOW TABLES FROM `ospos` 
 Execution Time:0.0042839050292969

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00041413307189941

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00055217742919922

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0016889572143555

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099301338195801

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.001554012298584

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0013840198516846

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0018899440765381

SELECT `item_id`, `name`, `pack_name`, `name`
FROM `ospos_items`
WHERE `deleted` = 0
AND `item_type` IN(0, 2)
AND `stock_type` = '0'
AND  `name` LIKE '%i%' ESCAPE '!'
ORDER BY `name` ASC 
 Execution Time:0.086577892303467

SELECT `item_id`, `item_number`, `pack_name`, `name`
FROM `ospos_items`
WHERE `deleted` = 0
AND `item_type` IN(0, 2)
AND `stock_type` = '0'
AND  `item_number` LIKE '%i%' ESCAPE '!'
ORDER BY `item_number` ASC 
 Execution Time:0.00085997581481934

SELECT *
FROM `ospos_item_kits`
WHERE `name` LIKE '%i%' ESCAPE '!'
OR  `item_kit_number` LIKE '%i%' ESCAPE '!'
ORDER BY `name` ASC 
 Execution Time:0.037281036376953

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'bv2e21s9gbkdaj9dtpdarc99h9ckce35'
AND `ip_address` = '::1' 
 Execution Time:0.044487953186035

SELECT GET_LOCK('d3bddbfe0ca8fd767cbd3f1153858aa1', 300) AS ci_session_lock 
 Execution Time:0.0011160373687744

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'bv2e21s9gbkdaj9dtpdarc99h9ckce35'
AND `ip_address` = '::1' 
 Execution Time:0.0058469772338867

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0025179386138916

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'receivings%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0050151348114014

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0057511329650879

SHOW TABLES FROM `ospos` 
 Execution Time:0.0066020488739014

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0013759136199951

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0016810894012451

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00064587593078613

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0011758804321289

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00086688995361328

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0021650791168213

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00118088722229

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'receivings%' ESCAPE '!'
AND `deleted` = 0
 LIMIT 1 
 Execution Time:0.0011301040649414

SELECT *
FROM `ospos_receivings`
WHERE `reference` = '6' 
 Execution Time:0.022459983825684

SELECT *
FROM `ospos_item_kits`
WHERE `item_kit_number` = '6' 
 Execution Time:0.0010979175567627

SELECT *
FROM `ospos_items`
WHERE `item_id` = 6
AND `deleted` = 0 
 Execution Time:0.00068092346191406

SELECT `ospos_items`.*, GROUP_CONCAT(attribute_value SEPARATOR '|') AS attribute_values, GROUP_CONCAT(attribute_decimal SEPARATOR '|') AS attribute_dvalues, GROUP_CONCAT(attribute_date SEPARATOR '|') AS attribute_dtvalues
FROM `ospos_items`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_items`.`item_id`
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_links`.`attribute_id` = `ospos_attribute_values`.`attribute_id`
WHERE `ospos_items`.`item_id` = '6'
GROUP BY `ospos_items`.`item_id` 
 Execution Time:0.044065952301025

SELECT GROUP_CONCAT(attribute_value SEPARATOR ', ') AS attribute_values, GROUP_CONCAT(DATE_FORMAT(attribute_date, '%m/%d/%Y') SEPARATOR ', ') AS attribute_dtvalues
FROM `ospos_attribute_links`
JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
JOIN `ospos_attribute_definitions` ON `ospos_attribute_definitions`.`definition_id` = `ospos_attribute_links`.`definition_id`
WHERE `definition_type` <> 'GROUP'
AND `deleted` = 0
AND `item_id` = 6
AND `sale_id` IS NULL
AND `receiving_id` IS NULL
AND definition_flags &  4 
 Execution Time:0.031057119369507

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00057888031005859

SELECT *
FROM `ospos_item_quantities`
WHERE `item_id` = '6'
AND `location_id` = '1' 
 Execution Time:0.019822835922241

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'receivings%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.0012710094451904

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099802017211914

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'items'
 LIMIT 1 
 Execution Time:0.00061202049255371

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'bv2e21s9gbkdaj9dtpdarc99h9ckce35'
AND `ip_address` = '::1' 
 Execution Time:0.00091314315795898

SELECT GET_LOCK('d3bddbfe0ca8fd767cbd3f1153858aa1', 300) AS ci_session_lock 
 Execution Time:0.00045204162597656

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'bv2e21s9gbkdaj9dtpdarc99h9ckce35'
AND `ip_address` = '::1' 
 Execution Time:0.00065207481384277

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00077486038208008

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'suppliers%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00060296058654785

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'suppliers!_%' ESCAPE '!' 
 Execution Time:0.00050902366638184

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0010168552398682

SHOW TABLES FROM `ospos` 
 Execution Time:0.0037939548492432

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00056004524230957

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00064420700073242

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00082302093505859

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00074005126953125

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00068092346191406

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00049114227294922

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00072813034057617

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_suppliers`.`person_id` = `ospos_people`.`person_id`
WHERE `deleted` = 0
AND  `company_name` LIKE '%b%' ESCAPE '!'
ORDER BY `company_name` ASC 
 Execution Time:0.026087045669556

SELECT DISTINCT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_suppliers`.`person_id` = `ospos_people`.`person_id`
WHERE `deleted` = 0
AND  `agency_name` LIKE '%b%' ESCAPE '!'
AND `agency_name` IS NOT NULL
ORDER BY `agency_name` ASC 
 Execution Time:0.026982069015503

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_suppliers`.`person_id` = `ospos_people`.`person_id`
WHERE   (
`first_name` LIKE '%b%' ESCAPE '!'
OR  `last_name` LIKE '%b%' ESCAPE '!'
OR  CONCAT(first_name, " ", last_name) LIKE '%b%' ESCAPE '!'
 )
AND `deleted` = 0
ORDER BY `last_name` ASC 
 Execution Time:0.029782056808472

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'bv2e21s9gbkdaj9dtpdarc99h9ckce35'
AND `ip_address` = '::1' 
 Execution Time:0.00076007843017578

SELECT GET_LOCK('d3bddbfe0ca8fd767cbd3f1153858aa1', 300) AS ci_session_lock 
 Execution Time:0.00045299530029297

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'bv2e21s9gbkdaj9dtpdarc99h9ckce35'
AND `ip_address` = '::1' 
 Execution Time:0.00064611434936523

UPDATE `ospos_sessions` SET `timestamp` = 1698131841, `data` = '__ci_last_regenerate|i:1698131841;person_id|s:1:\"1\";menu_group|s:4:\"home\";recv_cart|a:1:{i:1;a:20:{s:7:\"item_id\";s:1:\"6\";s:13:\"item_location\";s:1:\"1\";s:11:\"item_number\";N;s:10:\"stock_name\";s:5:\"stock\";s:4:\"line\";i:1;s:4:\"name\";s:6:\"item b\";s:11:\"description\";s:0:\"\";s:12:\"serialnumber\";s:0:\"\";s:16:\"attribute_values\";N;s:18:\"attribute_dtvalues\";N;s:21:\"allow_alt_description\";s:1:\"0\";s:13:\"is_serialized\";s:1:\"0\";s:8:\"quantity\";i:-1;s:8:\"discount\";s:1:\"0\";s:13:\"discount_type\";s:1:\"0\";s:8:\"in_stock\";s:7:\"544.000\";s:5:\"price\";s:6:\"900.00\";s:18:\"receiving_quantity\";s:5:\"0.000\";s:26:\"receiving_quantity_choices\";a:1:{i:1;s:2:\"x1\";}s:5:\"total\";s:6:\"0.0000\";}}recv_mode|s:6:\"return\";recv_supplier|i:-1;recv_stock_source|s:1:\"1\";'
WHERE `id` = 'bv2e21s9gbkdaj9dtpdarc99h9ckce35'
AND `ip_address` = '::1' 
 Execution Time:0.005267858505249

SELECT RELEASE_LOCK('d3bddbfe0ca8fd767cbd3f1153858aa1') AS ci_session_lock 
 Execution Time:0.00031495094299316

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'bv2e21s9gbkdaj9dtpdarc99h9ckce35'
AND `ip_address` = '::1' 
 Execution Time:0.00063920021057129

SELECT GET_LOCK('1a7d99a6577060cda5c619419305f82a', 300) AS ci_session_lock 
 Execution Time:0.0003509521484375

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '5ldi3srulebvg3im8t48b4rslta5jmvh'
AND `ip_address` = '::1' 
 Execution Time:0.00052690505981445

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00067591667175293

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'receivings%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00064897537231445

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0012810230255127

SHOW TABLES FROM `ospos` 
 Execution Time:0.0040619373321533

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0011320114135742

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0011169910430908

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00076413154602051

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00068998336791992

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00059604644775391

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00065088272094727

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.000823974609375

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_suppliers`.`person_id`
WHERE `ospos_suppliers`.`person_id` = '5' 
 Execution Time:0.00076913833618164

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'receivings%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.00096583366394043

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00059604644775391

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'items'
 LIMIT 1 
 Execution Time:0.00045394897460938

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_suppliers`.`person_id`
WHERE `ospos_suppliers`.`person_id` = '5' 
 Execution Time:0.00053310394287109

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '5ldi3srulebvg3im8t48b4rslta5jmvh'
AND `ip_address` = '::1' 
 Execution Time:0.0037169456481934

SELECT GET_LOCK('1a7d99a6577060cda5c619419305f82a', 300) AS ci_session_lock 
 Execution Time:0.00045919418334961

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '5ldi3srulebvg3im8t48b4rslta5jmvh'
AND `ip_address` = '::1' 
 Execution Time:0.010442972183228

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0030200481414795

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'receivings%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00069308280944824

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0015320777893066

SHOW TABLES FROM `ospos` 
 Execution Time:0.0049259662628174

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0014569759368896

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0014731884002686

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00071096420288086

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00060582160949707

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00056314468383789

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00045609474182129

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00066590309143066

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'receivings%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.0010731220245361

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00067996978759766

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'items'
 LIMIT 1 
 Execution Time:0.00046515464782715

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_suppliers`.`person_id`
WHERE `ospos_suppliers`.`person_id` = '5' 
 Execution Time:0.00049400329589844

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '5ldi3srulebvg3im8t48b4rslta5jmvh'
AND `ip_address` = '::1' 
 Execution Time:0.0012640953063965

SELECT GET_LOCK('1a7d99a6577060cda5c619419305f82a', 300) AS ci_session_lock 
 Execution Time:0.00041508674621582

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '5ldi3srulebvg3im8t48b4rslta5jmvh'
AND `ip_address` = '::1' 
 Execution Time:0.000885009765625

DELETE FROM `ospos_sessions`
WHERE `timestamp` < 1698124661 
 Execution Time:0.0070250034332275

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00057101249694824

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'receivings%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00048518180847168

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0012829303741455

SHOW TABLES FROM `ospos` 
 Execution Time:0.0029721260070801

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00048494338989258

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00056910514831543

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00084018707275391

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00083279609680176

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00058913230895996

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0006401538848877

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00061583518981934

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'receivings%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.001323938369751

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00090789794921875

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00088119506835938

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_suppliers`.`person_id`
WHERE `ospos_suppliers`.`person_id` = '5' 
 Execution Time:0.00047612190246582

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_suppliers`.`person_id`
WHERE `ospos_suppliers`.`person_id` = '5' 
 Execution Time:0.00062918663024902

INSERT INTO `ospos_receivings` (`receiving_time`, `supplier_id`, `employee_id`, `payment_type`, `comment`, `reference`, `amount_tendered`) VALUES ('2023-10-24 03:17:41', '5', '1', 'Cash', '', NULL, '450000') 
 Execution Time:0.0029149055480957

SELECT `ospos_items`.*, GROUP_CONCAT(attribute_value SEPARATOR '|') AS attribute_values, GROUP_CONCAT(attribute_decimal SEPARATOR '|') AS attribute_dvalues, GROUP_CONCAT(attribute_date SEPARATOR '|') AS attribute_dtvalues
FROM `ospos_items`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_items`.`item_id`
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_links`.`attribute_id` = `ospos_attribute_values`.`attribute_id`
WHERE `ospos_items`.`item_id` = '6'
GROUP BY `ospos_items`.`item_id` 
 Execution Time:0.0011129379272461

INSERT INTO `ospos_receivings_items` (`receiving_id`, `item_id`, `line`, `description`, `serialnumber`, `quantity_purchased`, `receiving_quantity`, `discount`, `discount_type`, `item_cost_price`, `item_unit_price`, `item_location`) VALUES (32, '6', 1, '', NULL, 500, '1', 0, '0', '900.00', 900, '1') 
 Execution Time:0.022169828414917

SELECT *
FROM `ospos_item_quantities`
WHERE `item_id` = '6'
AND `location_id` = '1' 
 Execution Time:0.00063800811767578

SELECT *
FROM `ospos_item_quantities`
WHERE `item_id` = '6'
AND `location_id` = '1' 
 Execution Time:0.00044393539428711

UPDATE `ospos_item_quantities` SET `quantity` = 1044, `item_id` = '6', `location_id` = '1'
WHERE `item_id` = '6'
AND `location_id` = '1' 
 Execution Time:0.0011551380157471

INSERT INTO `ospos_inventory` (`trans_date`, `trans_items`, `trans_user`, `trans_location`, `trans_comment`, `trans_inventory`) VALUES ('2023-10-24 03:17:41', '6', '1', '1', 'RECV 32', 500) 
 Execution Time:0.019819974899292

INSERT INTO ospos_attribute_links (item_id, definition_id, attribute_id, receiving_id)
			SELECT '6', definition_id, attribute_id, 32
			FROM ospos_attribute_links
			WHERE item_id = '6' AND sale_id IS NULL AND receiving_id IS NULL 
 Execution Time:0.0023891925811768

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_suppliers`.`person_id`
WHERE `ospos_suppliers`.`person_id` = '5' 
 Execution Time:0.00050806999206543

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_suppliers`.`person_id`
WHERE `ospos_suppliers`.`person_id` = '5' 
 Execution Time:0.00065207481384277

INSERT INTO `ospos_supplier_ledgers` (`ledger_time`, `supplier_id`, `employee_id`, `reference`, `debit_amount`, `credit_amount`, `payment_type`) VALUES ('2023-10-24 03:17:41', '5', '1', 'Rec-32', 0, 450000, 'Stock Receiving') 
 Execution Time:0.027200937271118

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_suppliers`.`person_id`
WHERE `ospos_suppliers`.`person_id` = '5' 
 Execution Time:0.00083208084106445

INSERT INTO `ospos_supplier_ledgers` (`ledger_time`, `supplier_id`, `employee_id`, `reference`, `debit_amount`, `credit_amount`, `payment_type`) VALUES ('2023-10-24 03:17:41', '5', '1', 'Rec-32', '450000', 0, 'Cash Payment') 
 Execution Time:0.00046277046203613

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '5ldi3srulebvg3im8t48b4rslta5jmvh'
AND `ip_address` = '::1' 
 Execution Time:0.00072908401489258

SELECT GET_LOCK('1a7d99a6577060cda5c619419305f82a', 300) AS ci_session_lock 
 Execution Time:0.00033307075500488

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '5ldi3srulebvg3im8t48b4rslta5jmvh'
AND `ip_address` = '::1' 
 Execution Time:0.0004279613494873

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00093913078308105

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00074601173400879

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0011801719665527

SHOW TABLES FROM `ospos` 
 Execution Time:0.0028688907623291

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00050187110900879

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00046420097351074

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00082182884216309

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00061893463134766

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00054001808166504

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00055217742919922

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00083494186401367

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1' 
 Execution Time:0.00075197219848633

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00065207481384277

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_receivings'
 LIMIT 1 
 Execution Time:0.00065898895263672

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
 Execution Time:0.00036406517028809

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.00046396255493164

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_suppliers'
 LIMIT 1 
 Execution Time:0.00083398818969727

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_suppliersgls'
 LIMIT 1 
 Execution Time:0.00066399574279785

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.00039792060852051

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '5ldi3srulebvg3im8t48b4rslta5jmvh'
AND `ip_address` = '::1' 
 Execution Time:0.00069785118103027

SELECT GET_LOCK('1a7d99a6577060cda5c619419305f82a', 300) AS ci_session_lock 
 Execution Time:0.00046682357788086

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '5ldi3srulebvg3im8t48b4rslta5jmvh'
AND `ip_address` = '::1' 
 Execution Time:0.00061583518981934

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00081300735473633

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
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
 Execution Time:0.0010061264038086

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00063991546630859

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_suppliersgls'
 LIMIT 1 
 Execution Time:0.00050997734069824

SHOW TABLES FROM `ospos` 
 Execution Time:0.0046579837799072

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00051498413085938

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00043702125549316

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00079011917114258

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00067806243896484

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0005800724029541

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00050806999206543

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00053715705871582

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_suppliers`.`person_id` = `ospos_people`.`person_id`
WHERE `category` = 0
AND `deleted` = 0
ORDER BY `company_name` ASC 
 Execution Time:0.0030639171600342

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '5ldi3srulebvg3im8t48b4rslta5jmvh'
AND `ip_address` = '::1' 
 Execution Time:0.00069904327392578

SELECT GET_LOCK('1a7d99a6577060cda5c619419305f82a', 300) AS ci_session_lock 
 Execution Time:0.00034403800964355

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '5ldi3srulebvg3im8t48b4rslta5jmvh'
AND `ip_address` = '::1' 
 Execution Time:0.00044798851013184

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0007469654083252

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0007319450378418

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0010571479797363

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00066709518432617

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_suppliersgls'
 LIMIT 1 
 Execution Time:0.00057697296142578

SHOW TABLES FROM `ospos` 
 Execution Time:0.0037870407104492

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00063490867614746

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00067400932312012

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00092506408691406

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00080704689025879

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0008540153503418

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00090312957763672

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00083017349243164

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
				WHERE DATE(sl.ledger_time) < '2023-10-24' and  sl.supplier_id = 5
				GROUP BY sl.supplier_id, sp.agency_name
			); 
 Execution Time:0.0016229152679443

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
				WHERE DATE(sl.ledger_time) BETWEEN '2023-10-24' AND '2023-10-24' and  sl.supplier_id = 5
				GROUP BY ledger_id, ledger_time
			);

			
			 
 Execution Time:0.0010199546813965

insert into ospos_temp_gl select *from ospos_temp_gl_op; 
 Execution Time:0.00040292739868164

SELECT `ledger_id`, `ledger_time`, `payment_type`, `supplier_name`, `employee_id`, `reference`, `debit_amount`, `credit_amount`, `balance`, `trans_type`, `user`
FROM `ospos_temp_gl`
WHERE `supplier_id` = '5'
ORDER BY `ledger_id` 
 Execution Time:0.00052499771118164

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_suppliers`.`person_id`
WHERE `ospos_suppliers`.`person_id` = '5' 
 Execution Time:0.0008389949798584

SELECT SUM(debit_amount) debit_sum, SUM(credit_amount) credit_sum, case when SUM(ROUND(debit_amount, 2)) > SUM(ROUND(credit_amount, 2)) then SUM(ROUND(debit_amount, 2))-SUM(ROUND(credit_amount, 2)) else 0 end AS debit_amount_balance, case when SUM(ROUND(credit_amount, 2)) > SUM(ROUND(debit_amount, 2)) then SUM(ROUND(credit_amount, 2))-SUM(ROUND(debit_amount, 2)) else 0 end AS credit_amount_balance
FROM `ospos_temp_gl`
WHERE `supplier_id` = '5' 
 Execution Time:0.00067591667175293

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0007479190826416

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00058388710021973

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '5ldi3srulebvg3im8t48b4rslta5jmvh'
AND `ip_address` = '::1' 
 Execution Time:0.00066685676574707

SELECT GET_LOCK('1a7d99a6577060cda5c619419305f82a', 300) AS ci_session_lock 
 Execution Time:0.00047898292541504

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '5ldi3srulebvg3im8t48b4rslta5jmvh'
AND `ip_address` = '::1' 
 Execution Time:0.00081300735473633

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00071406364440918

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'receivings%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00057196617126465

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0010600090026855

SHOW TABLES FROM `ospos` 
 Execution Time:0.0032849311828613

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00054407119750977

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0008392333984375

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00066184997558594

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0012381076812744

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00076889991760254

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00065112113952637

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00075912475585938

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'receivings%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.0010168552398682

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00044989585876465

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'items'
 LIMIT 1 
 Execution Time:0.00055909156799316

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '5ldi3srulebvg3im8t48b4rslta5jmvh'
AND `ip_address` = '::1' 
 Execution Time:0.00074410438537598

SELECT GET_LOCK('1a7d99a6577060cda5c619419305f82a', 300) AS ci_session_lock 
 Execution Time:0.00051498413085938

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '5ldi3srulebvg3im8t48b4rslta5jmvh'
AND `ip_address` = '::1' 
 Execution Time:0.00064802169799805

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0007929801940918

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'receivings%' ESCAPE '!'
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
 Execution Time:0.0010428428649902

SHOW TABLES FROM `ospos` 
 Execution Time:0.0050511360168457

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00061893463134766

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00064897537231445

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00080609321594238

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00066614151000977

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00060510635375977

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00054001808166504

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00081300735473633

SELECT `item_id`, `name`, `pack_name`, `name`
FROM `ospos_items`
WHERE `deleted` = 0
AND `item_type` IN(0, 2)
AND `stock_type` = '0'
AND  `name` LIKE '%1%' ESCAPE '!'
ORDER BY `name` ASC 
 Execution Time:0.00089001655578613

SELECT `item_id`, `item_number`, `pack_name`, `name`
FROM `ospos_items`
WHERE `deleted` = 0
AND `item_type` IN(0, 2)
AND `stock_type` = '0'
AND  `item_number` LIKE '%1%' ESCAPE '!'
ORDER BY `item_number` ASC 
 Execution Time:0.00063109397888184

SELECT *
FROM `ospos_item_kits`
WHERE `name` LIKE '%1%' ESCAPE '!'
OR  `item_kit_number` LIKE '%1%' ESCAPE '!'
ORDER BY `name` ASC 
 Execution Time:0.00051188468933105

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '5ldi3srulebvg3im8t48b4rslta5jmvh'
AND `ip_address` = '::1' 
 Execution Time:0.00073003768920898

SELECT GET_LOCK('1a7d99a6577060cda5c619419305f82a', 300) AS ci_session_lock 
 Execution Time:0.0003659725189209

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '5ldi3srulebvg3im8t48b4rslta5jmvh'
AND `ip_address` = '::1' 
 Execution Time:0.00059413909912109

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00068497657775879

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'receivings%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00051999092102051

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0009770393371582

SHOW TABLES FROM `ospos` 
 Execution Time:0.0046908855438232

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0005800724029541

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00065183639526367

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00059294700622559

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00055909156799316

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00061202049255371

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00051498413085938

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010590553283691

SELECT *
FROM `ospos_item_kits`
WHERE `item_kit_number` = '1' 
 Execution Time:0.00070595741271973

SELECT *
FROM `ospos_items`
WHERE `item_id` = 1
AND `deleted` = 0 
 Execution Time:0.00046801567077637

SELECT `ospos_items`.*, GROUP_CONCAT(attribute_value SEPARATOR '|') AS attribute_values, GROUP_CONCAT(attribute_decimal SEPARATOR '|') AS attribute_dvalues, GROUP_CONCAT(attribute_date SEPARATOR '|') AS attribute_dtvalues
FROM `ospos_items`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_items`.`item_id`
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_links`.`attribute_id` = `ospos_attribute_values`.`attribute_id`
WHERE `ospos_items`.`item_id` = '1'
GROUP BY `ospos_items`.`item_id` 
 Execution Time:0.0012850761413574

SELECT GROUP_CONCAT(attribute_value SEPARATOR ', ') AS attribute_values, GROUP_CONCAT(DATE_FORMAT(attribute_date, '%m/%d/%Y') SEPARATOR ', ') AS attribute_dtvalues
FROM `ospos_attribute_links`
JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
JOIN `ospos_attribute_definitions` ON `ospos_attribute_definitions`.`definition_id` = `ospos_attribute_links`.`definition_id`
WHERE `definition_type` <> 'GROUP'
AND `deleted` = 0
AND `item_id` = 1
AND `sale_id` IS NULL
AND `receiving_id` IS NULL
AND definition_flags &  4 
 Execution Time:0.00090122222900391

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00033903121948242

SELECT *
FROM `ospos_item_quantities`
WHERE `item_id` = '1'
AND `location_id` = '1' 
 Execution Time:0.00060009956359863

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'receivings%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.00096988677978516

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0007328987121582

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'items'
 LIMIT 1 
 Execution Time:0.00050806999206543

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '5ldi3srulebvg3im8t48b4rslta5jmvh'
AND `ip_address` = '::1' 
 Execution Time:0.00072503089904785

SELECT GET_LOCK('1a7d99a6577060cda5c619419305f82a', 300) AS ci_session_lock 
 Execution Time:0.00045585632324219

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '5ldi3srulebvg3im8t48b4rslta5jmvh'
AND `ip_address` = '::1' 
 Execution Time:0.0014522075653076

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00076603889465332

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'receivings%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00050091743469238

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00092291831970215

SHOW TABLES FROM `ospos` 
 Execution Time:0.0032508373260498

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00057792663574219

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00066304206848145

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00051116943359375

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00060892105102539

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00061511993408203

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0005490779876709

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00081110000610352

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'receivings%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.00072598457336426

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00057888031005859

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'items'
 LIMIT 1 
 Execution Time:0.00046086311340332

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '5ldi3srulebvg3im8t48b4rslta5jmvh'
AND `ip_address` = '::1' 
 Execution Time:0.00081896781921387

SELECT GET_LOCK('1a7d99a6577060cda5c619419305f82a', 300) AS ci_session_lock 
 Execution Time:0.00043702125549316

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '5ldi3srulebvg3im8t48b4rslta5jmvh'
AND `ip_address` = '::1' 
 Execution Time:0.00057291984558105

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00082206726074219

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'receivings%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00062203407287598

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0012938976287842

SHOW TABLES FROM `ospos` 
 Execution Time:0.0047969818115234

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00054192543029785

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00060606002807617

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00079989433288574

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0006411075592041

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00059604644775391

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00060892105102539

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00078988075256348

SELECT `item_id`, `name`, `pack_name`, `name`
FROM `ospos_items`
WHERE `deleted` = 0
AND `item_type` IN(0, 2)
AND `stock_type` = '0'
AND  `name` LIKE '%b%' ESCAPE '!'
ORDER BY `name` ASC 
 Execution Time:0.00073409080505371

SELECT `item_id`, `item_number`, `pack_name`, `name`
FROM `ospos_items`
WHERE `deleted` = 0
AND `item_type` IN(0, 2)
AND `stock_type` = '0'
AND  `item_number` LIKE '%b%' ESCAPE '!'
ORDER BY `item_number` ASC 
 Execution Time:0.00079488754272461

SELECT *
FROM `ospos_item_kits`
WHERE `name` LIKE '%b%' ESCAPE '!'
OR  `item_kit_number` LIKE '%b%' ESCAPE '!'
ORDER BY `name` ASC 
 Execution Time:0.00053119659423828

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '5ldi3srulebvg3im8t48b4rslta5jmvh'
AND `ip_address` = '::1' 
 Execution Time:0.00076508522033691

SELECT GET_LOCK('1a7d99a6577060cda5c619419305f82a', 300) AS ci_session_lock 
 Execution Time:0.0004730224609375

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '5ldi3srulebvg3im8t48b4rslta5jmvh'
AND `ip_address` = '::1' 
 Execution Time:0.00067996978759766

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00076103210449219

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'suppliers%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00061511993408203

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'suppliers!_%' ESCAPE '!' 
 Execution Time:0.00047612190246582

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0010900497436523

SHOW TABLES FROM `ospos` 
 Execution Time:0.0037171840667725

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00053787231445312

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00072193145751953

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00072193145751953

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00076794624328613

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00059199333190918

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00064897537231445

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00062108039855957

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_suppliers`.`person_id` = `ospos_people`.`person_id`
WHERE `deleted` = 0
AND  `company_name` LIKE '%b%' ESCAPE '!'
ORDER BY `company_name` ASC 
 Execution Time:0.000640869140625

SELECT DISTINCT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_suppliers`.`person_id` = `ospos_people`.`person_id`
WHERE `deleted` = 0
AND  `agency_name` LIKE '%b%' ESCAPE '!'
AND `agency_name` IS NOT NULL
ORDER BY `agency_name` ASC 
 Execution Time:0.026206016540527

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_suppliers`.`person_id` = `ospos_people`.`person_id`
WHERE   (
`first_name` LIKE '%b%' ESCAPE '!'
OR  `last_name` LIKE '%b%' ESCAPE '!'
OR  CONCAT(first_name, " ", last_name) LIKE '%b%' ESCAPE '!'
 )
AND `deleted` = 0
ORDER BY `last_name` ASC 
 Execution Time:0.021366119384766

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '5ldi3srulebvg3im8t48b4rslta5jmvh'
AND `ip_address` = '::1' 
 Execution Time:0.00071096420288086

SELECT GET_LOCK('1a7d99a6577060cda5c619419305f82a', 300) AS ci_session_lock 
 Execution Time:0.0006871223449707

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '5ldi3srulebvg3im8t48b4rslta5jmvh'
AND `ip_address` = '::1' 
 Execution Time:0.00058507919311523

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00077700614929199

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'receivings%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00059700012207031

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0014379024505615

SHOW TABLES FROM `ospos` 
 Execution Time:0.003676176071167

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0005500316619873

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0009620189666748

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00083613395690918

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00089287757873535

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.001378059387207

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00063395500183105

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00093698501586914

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_suppliers`.`person_id`
WHERE `ospos_suppliers`.`person_id` = '5' 
 Execution Time:0.00060391426086426

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'receivings%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.00086593627929688

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00072288513183594

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'items'
 LIMIT 1 
 Execution Time:0.00052404403686523

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_suppliers`.`person_id`
WHERE `ospos_suppliers`.`person_id` = '5' 
 Execution Time:0.00088095664978027

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '5ldi3srulebvg3im8t48b4rslta5jmvh'
AND `ip_address` = '::1' 
 Execution Time:0.00079894065856934

SELECT GET_LOCK('1a7d99a6577060cda5c619419305f82a', 300) AS ci_session_lock 
 Execution Time:0.00038814544677734

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '5ldi3srulebvg3im8t48b4rslta5jmvh'
AND `ip_address` = '::1' 
 Execution Time:0.00088381767272949

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00082683563232422

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'receivings%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0010299682617188

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0014219284057617

SHOW TABLES FROM `ospos` 
 Execution Time:0.0050039291381836

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00056600570678711

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00070905685424805

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00082993507385254

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00079894065856934

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00060081481933594

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00073790550231934

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00070405006408691

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'receivings%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.00093388557434082

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00070095062255859

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00065517425537109

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_suppliers`.`person_id`
WHERE `ospos_suppliers`.`person_id` = '5' 
 Execution Time:0.00058412551879883

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_suppliers`.`person_id`
WHERE `ospos_suppliers`.`person_id` = '5' 
 Execution Time:0.00054192543029785

INSERT INTO `ospos_receivings` (`receiving_time`, `supplier_id`, `employee_id`, `payment_type`, `comment`, `reference`, `amount_tendered`) VALUES ('2023-10-24 03:20:28', '5', '1', 'Cash', '', NULL, '2000') 
 Execution Time:0.00076985359191895

SELECT `ospos_items`.*, GROUP_CONCAT(attribute_value SEPARATOR '|') AS attribute_values, GROUP_CONCAT(attribute_decimal SEPARATOR '|') AS attribute_dvalues, GROUP_CONCAT(attribute_date SEPARATOR '|') AS attribute_dtvalues
FROM `ospos_items`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_items`.`item_id`
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_links`.`attribute_id` = `ospos_attribute_values`.`attribute_id`
WHERE `ospos_items`.`item_id` = '1'
GROUP BY `ospos_items`.`item_id` 
 Execution Time:0.002007007598877

INSERT INTO `ospos_receivings_items` (`receiving_id`, `item_id`, `line`, `description`, `serialnumber`, `quantity_purchased`, `receiving_quantity`, `discount`, `discount_type`, `item_cost_price`, `item_unit_price`, `item_location`) VALUES (33, '1', 1, '', NULL, 11, '1', 0, '0', '310.00', 310, '1') 
 Execution Time:0.00034999847412109

SELECT *
FROM `ospos_item_quantities`
WHERE `item_id` = '1'
AND `location_id` = '1' 
 Execution Time:0.00047397613525391

SELECT *
FROM `ospos_item_quantities`
WHERE `item_id` = '1'
AND `location_id` = '1' 
 Execution Time:0.00096702575683594

UPDATE `ospos_item_quantities` SET `quantity` = 2993, `item_id` = '1', `location_id` = '1'
WHERE `item_id` = '1'
AND `location_id` = '1' 
 Execution Time:0.00078797340393066

INSERT INTO `ospos_inventory` (`trans_date`, `trans_items`, `trans_user`, `trans_location`, `trans_comment`, `trans_inventory`) VALUES ('2023-10-24 03:20:28', '1', '1', '1', 'RECV 33', 11) 
 Execution Time:0.00039505958557129

INSERT INTO ospos_attribute_links (item_id, definition_id, attribute_id, receiving_id)
			SELECT '1', definition_id, attribute_id, 33
			FROM ospos_attribute_links
			WHERE item_id = '1' AND sale_id IS NULL AND receiving_id IS NULL 
 Execution Time:0.0024948120117188

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_suppliers`.`person_id`
WHERE `ospos_suppliers`.`person_id` = '5' 
 Execution Time:0.00056290626525879

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_suppliers`.`person_id`
WHERE `ospos_suppliers`.`person_id` = '5' 
 Execution Time:0.0003969669342041

INSERT INTO `ospos_supplier_ledgers` (`ledger_time`, `supplier_id`, `employee_id`, `reference`, `debit_amount`, `credit_amount`, `payment_type`) VALUES ('2023-10-24 03:20:28', '5', '1', 'Rec-33', 0, 3410, 'Stock Receiving') 
 Execution Time:0.00037097930908203

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_suppliers`.`person_id`
WHERE `ospos_suppliers`.`person_id` = '5' 
 Execution Time:0.0068099498748779

INSERT INTO `ospos_supplier_ledgers` (`ledger_time`, `supplier_id`, `employee_id`, `reference`, `debit_amount`, `credit_amount`, `payment_type`) VALUES ('2023-10-24 03:20:28', '5', '1', 'Rec-33', '2000', 0, 'Cash Payment') 
 Execution Time:0.00051093101501465

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '5ldi3srulebvg3im8t48b4rslta5jmvh'
AND `ip_address` = '::1' 
 Execution Time:0.00076198577880859

SELECT GET_LOCK('1a7d99a6577060cda5c619419305f82a', 300) AS ci_session_lock 
 Execution Time:0.00052809715270996

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '5ldi3srulebvg3im8t48b4rslta5jmvh'
AND `ip_address` = '::1' 
 Execution Time:0.00064706802368164

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00078678131103516

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
 Execution Time:0.0011370182037354

SHOW TABLES FROM `ospos` 
 Execution Time:0.0026171207427979

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00056195259094238

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00069594383239746

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00081992149353027

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00061202049255371

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00060892105102539

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00060796737670898

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00073599815368652

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1' 
 Execution Time:0.0007479190826416

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00066113471984863

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_receivings'
 LIMIT 1 
 Execution Time:0.0004730224609375

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_customers'
 LIMIT 1 
 Execution Time:0.00057697296142578

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_discounts'
 LIMIT 1 
 Execution Time:0.0004889965057373

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.0003209114074707

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_suppliers'
 LIMIT 1 
 Execution Time:0.00046682357788086

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_suppliersgls'
 LIMIT 1 
 Execution Time:0.00047683715820312

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.00039410591125488

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '5ldi3srulebvg3im8t48b4rslta5jmvh'
AND `ip_address` = '::1' 
 Execution Time:0.00081181526184082

SELECT GET_LOCK('1a7d99a6577060cda5c619419305f82a', 300) AS ci_session_lock 
 Execution Time:0.00038504600524902

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '5ldi3srulebvg3im8t48b4rslta5jmvh'
AND `ip_address` = '::1' 
 Execution Time:0.00089716911315918

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010380744934082

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00081491470336914

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0010368824005127

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00059080123901367

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_suppliersgls'
 LIMIT 1 
 Execution Time:0.00032281875610352

SHOW TABLES FROM `ospos` 
 Execution Time:0.0048270225524902

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00053501129150391

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00061607360839844

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00086212158203125

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0006561279296875

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00058197975158691

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00066113471984863

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00080585479736328

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_suppliers`.`person_id` = `ospos_people`.`person_id`
WHERE `category` = 0
AND `deleted` = 0
ORDER BY `company_name` ASC 
 Execution Time:0.0012030601501465

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '5ldi3srulebvg3im8t48b4rslta5jmvh'
AND `ip_address` = '::1' 
 Execution Time:0.00077199935913086

SELECT GET_LOCK('1a7d99a6577060cda5c619419305f82a', 300) AS ci_session_lock 
 Execution Time:0.00043606758117676

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '5ldi3srulebvg3im8t48b4rslta5jmvh'
AND `ip_address` = '::1' 
 Execution Time:0.00069904327392578

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00081515312194824

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00085997581481934

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0020201206207275

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00059700012207031

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_suppliersgls'
 LIMIT 1 
 Execution Time:0.00053095817565918

SHOW TABLES FROM `ospos` 
 Execution Time:0.0067880153656006

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00053906440734863

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00080490112304688

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00061607360839844

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00061988830566406

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00062084197998047

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0005650520324707

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00083398818969727

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
				WHERE DATE(sl.ledger_time) < '2023-10-24' and  sl.supplier_id = 5
				GROUP BY sl.supplier_id, sp.agency_name
			); 
 Execution Time:0.0013020038604736

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
				WHERE DATE(sl.ledger_time) BETWEEN '2023-10-24' AND '2023-10-24' and  sl.supplier_id = 5
				GROUP BY ledger_id, ledger_time
			);

			
			 
 Execution Time:0.0014650821685791

insert into ospos_temp_gl select *from ospos_temp_gl_op; 
 Execution Time:0.0003972053527832

SELECT `ledger_id`, `ledger_time`, `payment_type`, `supplier_name`, `employee_id`, `reference`, `debit_amount`, `credit_amount`, `balance`, `trans_type`, `user`
FROM `ospos_temp_gl`
WHERE `supplier_id` = '5'
ORDER BY `ledger_id` 
 Execution Time:0.00055098533630371

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_suppliers`.`person_id`
WHERE `ospos_suppliers`.`person_id` = '5' 
 Execution Time:0.00087904930114746

SELECT SUM(debit_amount) debit_sum, SUM(credit_amount) credit_sum, case when SUM(ROUND(debit_amount, 2)) > SUM(ROUND(credit_amount, 2)) then SUM(ROUND(debit_amount, 2))-SUM(ROUND(credit_amount, 2)) else 0 end AS debit_amount_balance, case when SUM(ROUND(credit_amount, 2)) > SUM(ROUND(debit_amount, 2)) then SUM(ROUND(credit_amount, 2))-SUM(ROUND(debit_amount, 2)) else 0 end AS credit_amount_balance
FROM `ospos_temp_gl`
WHERE `supplier_id` = '5' 
 Execution Time:0.00094294548034668

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00091099739074707

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0005488395690918

