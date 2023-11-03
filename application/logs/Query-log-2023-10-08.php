SELECT GET_LOCK('48fb5902aae2b7db51ef71760e35e357', 300) AS ci_session_lock 
 Execution Time:0.001183032989502

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'pahvpcso0d8t50erlgk7ivumradsgtb9'
AND `ip_address` = '::1' 
 Execution Time:0.1288731098175

SHOW TABLES FROM `ospos` 
 Execution Time:0.0049660205841064

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.027992010116577

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.019924879074097

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'company_logo'
 LIMIT 1 
 Execution Time:0.0007779598236084

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00070905685424805

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'pahvpcso0d8t50erlgk7ivumradsgtb9'
AND `ip_address` = '::1' 
 Execution Time:0.00094294548034668

SELECT GET_LOCK('48fb5902aae2b7db51ef71760e35e357', 300) AS ci_session_lock 
 Execution Time:0.00036501884460449

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'pahvpcso0d8t50erlgk7ivumradsgtb9'
AND `ip_address` = '::1' 
 Execution Time:0.0005500316619873

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.057914972305298

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE '%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.018279075622559

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.037657976150513

SHOW TABLES FROM `ospos` 
 Execution Time:0.0027520656585693

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00074195861816406

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00082993507385254

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0008399486541748

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00086379051208496

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00071001052856445

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00074505805969238

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00091791152954102

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'pahvpcso0d8t50erlgk7ivumradsgtb9'
AND `ip_address` = '::1' 
 Execution Time:0.0042529106140137

SELECT GET_LOCK('48fb5902aae2b7db51ef71760e35e357', 300) AS ci_session_lock 
 Execution Time:0.014642000198364

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'pahvpcso0d8t50erlgk7ivumradsgtb9'
AND `ip_address` = '::1' 
 Execution Time:0.0031211376190186

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0026350021362305

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE '%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0015068054199219

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0020802021026611

SHOW TABLES FROM `ospos` 
 Execution Time:0.0069940090179443

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00061392784118652

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0012061595916748

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00088095664978027

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00085687637329102

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0006248950958252

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0015418529510498

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.010661125183105

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'pahvpcso0d8t50erlgk7ivumradsgtb9'
AND `ip_address` = '::1' 
 Execution Time:0.0018379688262939

SELECT GET_LOCK('48fb5902aae2b7db51ef71760e35e357', 300) AS ci_session_lock 
 Execution Time:0.00051712989807129

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'pahvpcso0d8t50erlgk7ivumradsgtb9'
AND `ip_address` = '::1' 
 Execution Time:0.00059890747070312

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00061321258544922

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.001291036605835

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0016300678253174

SHOW TABLES FROM `ospos` 
 Execution Time:0.0028109550476074

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.030884027481079

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0024950504302979

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00088119506835938

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0052909851074219

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.027689933776855

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0025129318237305

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.001680850982666

SELECT *
FROM `ospos_dinner_tables`
WHERE `status` = 0
OR `dinner_table_id` IS NULL
AND `deleted` = 0 
 Execution Time:0.017014026641846

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.0075387954711914

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0
 LIMIT 1 
 Execution Time:0.00073409080505371

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:0.00097203254699707

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:0.00083518028259277

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.047293186187744

SHOW COLUMNS FROM `ospos_customers` 
 Execution Time:0.044136047363281

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00068879127502441

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'items'
 LIMIT 1 
 Execution Time:0.00054192543029785

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00095105171203613

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'sales_change_price'
 LIMIT 1 
 Execution Time:0.00080180168151855

SELECT COUNT(*) AS `numrows`
FROM `ospos_sales`
WHERE `invoice_number` IS NOT NULL 
 Execution Time:0.0039539337158203

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00063800811767578

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'pahvpcso0d8t50erlgk7ivumradsgtb9'
AND `ip_address` = '::1' 
 Execution Time:0.00072193145751953

SELECT GET_LOCK('48fb5902aae2b7db51ef71760e35e357', 300) AS ci_session_lock 
 Execution Time:0.00038886070251465

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'pahvpcso0d8t50erlgk7ivumradsgtb9'
AND `ip_address` = '::1' 
 Execution Time:0.00054311752319336

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00076603889465332

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00049495697021484

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0012071132659912

SHOW TABLES FROM `ospos` 
 Execution Time:0.0031638145446777

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00058412551879883

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00072598457336426

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00061798095703125

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00078392028808594

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00087904930114746

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00086307525634766

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00078988075256348

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.000518798828125

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0014889240264893

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010890960693359

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'pahvpcso0d8t50erlgk7ivumradsgtb9'
AND `ip_address` = '::1' 
 Execution Time:0.00086498260498047

SELECT GET_LOCK('48fb5902aae2b7db51ef71760e35e357', 300) AS ci_session_lock 
 Execution Time:0.00042986869812012

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'pahvpcso0d8t50erlgk7ivumradsgtb9'
AND `ip_address` = '::1' 
 Execution Time:0.00055193901062012

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00069499015808105

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0011758804321289

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0013470649719238

SHOW TABLES FROM `ospos` 
 Execution Time:0.003079891204834

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.001101016998291

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0018560886383057

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00067877769470215

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010988712310791

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0008540153503418

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00065207481384277

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0015780925750732

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_payments_temp (PRIMARY KEY(sale_id), INDEX(sale_id))
			(
				SELECT payments.sale_id,
					SUM(CASE WHEN payments.cash_adjustment = 0 THEN payments.payment_amount ELSE 0 END) AS sale_payment_amount,
					SUM(CASE WHEN payments.cash_adjustment = 1 THEN payments.payment_amount ELSE 0 END) AS sale_cash_adjustment,
					GROUP_CONCAT(CONCAT(payments.payment_type, " ", (payments.payment_amount - payments.cash_refund)) SEPARATOR ", ") AS payment_type
				FROM ospos_sales_payments AS payments
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = payments.sale_id
				WHERE sales.sale_status = 0 AND DATE(sales.sale_time) BETWEEN '2023-10-08' AND '2023-10-08'
				GROUP BY payments.sale_id
			) 
 Execution Time:0.029053926467896

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_taxes_temp (INDEX(sale_id), INDEX(item_id)) ENGINE=MEMORY
			(
				SELECT sales_items_taxes.sale_id AS sale_id,
					sales_items_taxes.item_id AS item_id,
					sales_items_taxes.line AS line,
					SUM(sales_items_taxes.item_tax_amount) AS tax,
					SUM(CASE WHEN sales_items_taxes.tax_type = 0 THEN sales_items_taxes.item_tax_amount ELSE 0 END) AS internal_tax,
					SUM(CASE WHEN sales_items_taxes.tax_type = 1 THEN sales_items_taxes.item_tax_amount ELSE 0 END) AS sales_tax
				FROM ospos_sales_items_taxes AS sales_items_taxes
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = sales_items_taxes.sale_id
				INNER JOIN ospos_sales_items AS sales_items
					ON sales_items.sale_id = sales_items_taxes.sale_id AND sales_items.line = sales_items_taxes.line
				WHERE sales.sale_status = 0 AND DATE(sales.sale_time) BETWEEN '2023-10-08' AND '2023-10-08'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.022345066070557

SELECT `sales`.`sale_id` AS `sale_id`, MAX(DATE(sales.sale_time)) AS sale_date, MAX(sales.sale_time) AS sale_time, MAX(sales.invoice_number) AS invoice_number, MAX(sales.quote_number) AS quote_number, SUM(sales_items.quantity_purchased) AS items_purchased, MAX(CONCAT(customer_p.first_name, " ", customer_p.last_name)) AS customer_name, MAX(customer.company_name) AS company_name, ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) - IFNULL(SUM(sales_items_taxes.internal_tax), 0) AS subtotal, IFNULL(SUM(sales_items_taxes.tax), 0) AS tax, ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.sales_tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0) AS total, SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost, (ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.sales_tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit, ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.sales_tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0) AS amount_due, MAX(payments.sale_payment_amount) AS amount_tendered, (MAX(payments.sale_payment_amount)) - (ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.sales_tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS change_due, MAX(payments.payment_type) AS payment_type
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT JOIN `ospos_people` AS `customer_p` ON `sales`.`customer_id` = `customer_p`.`person_id`
LEFT JOIN `ospos_customers` AS `customer` ON `sales`.`customer_id` = `customer`.`person_id`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
WHERE `sales`.`sale_status` =0 AND DATE(sales.sale_time) BETWEEN '2023-10-08' AND '2023-10-08'
GROUP BY `sales`.`sale_id`
 LIMIT 25 
 Execution Time:0.0027618408203125

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_payments_temp (PRIMARY KEY(sale_id), INDEX(sale_id))
			(
				SELECT payments.sale_id,
					SUM(CASE WHEN payments.cash_adjustment = 0 THEN payments.payment_amount ELSE 0 END) AS sale_payment_amount,
					SUM(CASE WHEN payments.cash_adjustment = 1 THEN payments.payment_amount ELSE 0 END) AS sale_cash_adjustment,
					GROUP_CONCAT(CONCAT(payments.payment_type, " ", (payments.payment_amount - payments.cash_refund)) SEPARATOR ", ") AS payment_type
				FROM ospos_sales_payments AS payments
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = payments.sale_id
				WHERE sales.sale_status = 0 AND DATE(sales.sale_time) BETWEEN '2023-10-08' AND '2023-10-08'
				GROUP BY payments.sale_id
			) 
 Execution Time:0.00049185752868652

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_taxes_temp (INDEX(sale_id), INDEX(item_id)) ENGINE=MEMORY
			(
				SELECT sales_items_taxes.sale_id AS sale_id,
					sales_items_taxes.item_id AS item_id,
					sales_items_taxes.line AS line,
					SUM(sales_items_taxes.item_tax_amount) AS tax,
					SUM(CASE WHEN sales_items_taxes.tax_type = 0 THEN sales_items_taxes.item_tax_amount ELSE 0 END) AS internal_tax,
					SUM(CASE WHEN sales_items_taxes.tax_type = 1 THEN sales_items_taxes.item_tax_amount ELSE 0 END) AS sales_tax
				FROM ospos_sales_items_taxes AS sales_items_taxes
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = sales_items_taxes.sale_id
				INNER JOIN ospos_sales_items AS sales_items
					ON sales_items.sale_id = sales_items_taxes.sale_id AND sales_items.line = sales_items_taxes.line
				WHERE sales.sale_status = 0 AND DATE(sales.sale_time) BETWEEN '2023-10-08' AND '2023-10-08'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.00069785118103027

SELECT COUNT(DISTINCT sales.sale_id) AS count
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT JOIN `ospos_people` AS `customer_p` ON `sales`.`customer_id` = `customer_p`.`person_id`
LEFT JOIN `ospos_customers` AS `customer` ON `sales`.`customer_id` = `customer`.`person_id`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
WHERE `sales`.`sale_status` =0 AND DATE(sales.sale_time) BETWEEN '2023-10-08' AND '2023-10-08' 
 Execution Time:0.0007779598236084

SELECT `payment_type`, COUNT(payment_amount) AS count, SUM(payment_amount - cash_refund) AS payment_amount
FROM `ospos_sales` AS `sales`
JOIN `ospos_sales_payments` ON `ospos_sales_payments`.`sale_id` = `sales`.`sale_id`
LEFT JOIN `ospos_people` AS `customer_p` ON `sales`.`customer_id` = `customer_p`.`person_id`
LEFT JOIN `ospos_customers` AS `customer` ON `sales`.`customer_id` = `customer`.`person_id`
WHERE DATE(sales.sale_time) BETWEEN '2023-10-08' AND '2023-10-08'
AND `sales`.`sale_status` =0
GROUP BY `payment_type` 
 Execution Time:0.00083804130554199

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'pahvpcso0d8t50erlgk7ivumradsgtb9'
AND `ip_address` = '::1' 
 Execution Time:0.00061297416687012

SELECT GET_LOCK('48fb5902aae2b7db51ef71760e35e357', 300) AS ci_session_lock 
 Execution Time:0.0003359317779541

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'pahvpcso0d8t50erlgk7ivumradsgtb9'
AND `ip_address` = '::1' 
 Execution Time:0.00055098533630371

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00087308883666992

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00068092346191406

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0011310577392578

SHOW TABLES FROM `ospos` 
 Execution Time:0.0030560493469238

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0014810562133789

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0006248950958252

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00060915946960449

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00062704086303711

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00049805641174316

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00058984756469727

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0008089542388916

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_payments_temp (PRIMARY KEY(sale_id), INDEX(sale_id))
			(
				SELECT payments.sale_id,
					SUM(CASE WHEN payments.cash_adjustment = 0 THEN payments.payment_amount ELSE 0 END) AS sale_payment_amount,
					SUM(CASE WHEN payments.cash_adjustment = 1 THEN payments.payment_amount ELSE 0 END) AS sale_cash_adjustment,
					GROUP_CONCAT(CONCAT(payments.payment_type, " ", (payments.payment_amount - payments.cash_refund)) SEPARATOR ", ") AS payment_type
				FROM ospos_sales_payments AS payments
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = payments.sale_id
				WHERE sales.sale_status = 0 AND DATE(sales.sale_time) BETWEEN '2023-09-09' AND '2023-10-08'
				GROUP BY payments.sale_id
			) 
 Execution Time:0.0050640106201172

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_taxes_temp (INDEX(sale_id), INDEX(item_id)) ENGINE=MEMORY
			(
				SELECT sales_items_taxes.sale_id AS sale_id,
					sales_items_taxes.item_id AS item_id,
					sales_items_taxes.line AS line,
					SUM(sales_items_taxes.item_tax_amount) AS tax,
					SUM(CASE WHEN sales_items_taxes.tax_type = 0 THEN sales_items_taxes.item_tax_amount ELSE 0 END) AS internal_tax,
					SUM(CASE WHEN sales_items_taxes.tax_type = 1 THEN sales_items_taxes.item_tax_amount ELSE 0 END) AS sales_tax
				FROM ospos_sales_items_taxes AS sales_items_taxes
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = sales_items_taxes.sale_id
				INNER JOIN ospos_sales_items AS sales_items
					ON sales_items.sale_id = sales_items_taxes.sale_id AND sales_items.line = sales_items_taxes.line
				WHERE sales.sale_status = 0 AND DATE(sales.sale_time) BETWEEN '2023-09-09' AND '2023-10-08'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.00069093704223633

SELECT `sales`.`sale_id` AS `sale_id`, MAX(DATE(sales.sale_time)) AS sale_date, MAX(sales.sale_time) AS sale_time, MAX(sales.invoice_number) AS invoice_number, MAX(sales.quote_number) AS quote_number, SUM(sales_items.quantity_purchased) AS items_purchased, MAX(CONCAT(customer_p.first_name, " ", customer_p.last_name)) AS customer_name, MAX(customer.company_name) AS company_name, ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) - IFNULL(SUM(sales_items_taxes.internal_tax), 0) AS subtotal, IFNULL(SUM(sales_items_taxes.tax), 0) AS tax, ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.sales_tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0) AS total, SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost, (ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.sales_tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit, ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.sales_tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0) AS amount_due, MAX(payments.sale_payment_amount) AS amount_tendered, (MAX(payments.sale_payment_amount)) - (ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.sales_tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS change_due, MAX(payments.payment_type) AS payment_type
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT JOIN `ospos_people` AS `customer_p` ON `sales`.`customer_id` = `customer_p`.`person_id`
LEFT JOIN `ospos_customers` AS `customer` ON `sales`.`customer_id` = `customer`.`person_id`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
WHERE `sales`.`sale_status` =0 AND DATE(sales.sale_time) BETWEEN '2023-09-09' AND '2023-10-08'
GROUP BY `sales`.`sale_id`
 LIMIT 25 
 Execution Time:0.003939151763916

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_payments_temp (PRIMARY KEY(sale_id), INDEX(sale_id))
			(
				SELECT payments.sale_id,
					SUM(CASE WHEN payments.cash_adjustment = 0 THEN payments.payment_amount ELSE 0 END) AS sale_payment_amount,
					SUM(CASE WHEN payments.cash_adjustment = 1 THEN payments.payment_amount ELSE 0 END) AS sale_cash_adjustment,
					GROUP_CONCAT(CONCAT(payments.payment_type, " ", (payments.payment_amount - payments.cash_refund)) SEPARATOR ", ") AS payment_type
				FROM ospos_sales_payments AS payments
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = payments.sale_id
				WHERE sales.sale_status = 0 AND DATE(sales.sale_time) BETWEEN '2023-09-09' AND '2023-10-08'
				GROUP BY payments.sale_id
			) 
 Execution Time:0.00078797340393066

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_taxes_temp (INDEX(sale_id), INDEX(item_id)) ENGINE=MEMORY
			(
				SELECT sales_items_taxes.sale_id AS sale_id,
					sales_items_taxes.item_id AS item_id,
					sales_items_taxes.line AS line,
					SUM(sales_items_taxes.item_tax_amount) AS tax,
					SUM(CASE WHEN sales_items_taxes.tax_type = 0 THEN sales_items_taxes.item_tax_amount ELSE 0 END) AS internal_tax,
					SUM(CASE WHEN sales_items_taxes.tax_type = 1 THEN sales_items_taxes.item_tax_amount ELSE 0 END) AS sales_tax
				FROM ospos_sales_items_taxes AS sales_items_taxes
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = sales_items_taxes.sale_id
				INNER JOIN ospos_sales_items AS sales_items
					ON sales_items.sale_id = sales_items_taxes.sale_id AND sales_items.line = sales_items_taxes.line
				WHERE sales.sale_status = 0 AND DATE(sales.sale_time) BETWEEN '2023-09-09' AND '2023-10-08'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.00061392784118652

SELECT COUNT(DISTINCT sales.sale_id) AS count
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT JOIN `ospos_people` AS `customer_p` ON `sales`.`customer_id` = `customer_p`.`person_id`
LEFT JOIN `ospos_customers` AS `customer` ON `sales`.`customer_id` = `customer`.`person_id`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
WHERE `sales`.`sale_status` =0 AND DATE(sales.sale_time) BETWEEN '2023-09-09' AND '2023-10-08' 
 Execution Time:0.0023539066314697

SELECT `payment_type`, COUNT(payment_amount) AS count, SUM(payment_amount - cash_refund) AS payment_amount
FROM `ospos_sales` AS `sales`
JOIN `ospos_sales_payments` ON `ospos_sales_payments`.`sale_id` = `sales`.`sale_id`
LEFT JOIN `ospos_people` AS `customer_p` ON `sales`.`customer_id` = `customer_p`.`person_id`
LEFT JOIN `ospos_customers` AS `customer` ON `sales`.`customer_id` = `customer`.`person_id`
WHERE DATE(sales.sale_time) BETWEEN '2023-09-09' AND '2023-10-08'
AND `sales`.`sale_status` =0
GROUP BY `payment_type` 
 Execution Time:0.0013000965118408

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'pahvpcso0d8t50erlgk7ivumradsgtb9'
AND `ip_address` = '::1' 
 Execution Time:0.00087618827819824

SELECT GET_LOCK('48fb5902aae2b7db51ef71760e35e357', 300) AS ci_session_lock 
 Execution Time:0.00047993659973145

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'pahvpcso0d8t50erlgk7ivumradsgtb9'
AND `ip_address` = '::1' 
 Execution Time:0.00059986114501953

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00071191787719727

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00053882598876953

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0016851425170898

SHOW TABLES FROM `ospos` 
 Execution Time:0.0035848617553711

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0004429817199707

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00073385238647461

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00060701370239258

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00077509880065918

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00048089027404785

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00057792663574219

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00064492225646973

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0007469654083252

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'sales_delete'
 LIMIT 1 
 Execution Time:0.00049686431884766

SELECT *
FROM `ospos_sales`
WHERE `sale_id` = '12' 
 Execution Time:0.00047397613525391

SELECT *
FROM `ospos_sales_items`
WHERE `sale_id` = '12' 
 Execution Time:0.00051999092102051

SELECT `ospos_items`.*, GROUP_CONCAT(attribute_value SEPARATOR '|') AS attribute_values, GROUP_CONCAT(attribute_decimal SEPARATOR '|') AS attribute_dvalues, GROUP_CONCAT(attribute_date SEPARATOR '|') AS attribute_dtvalues
FROM `ospos_items`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_items`.`item_id`
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_links`.`attribute_id` = `ospos_attribute_values`.`attribute_id`
WHERE `ospos_items`.`item_id` = '1'
GROUP BY `ospos_items`.`item_id` 
 Execution Time:0.010113954544067

INSERT INTO `ospos_inventory` (`trans_date`, `trans_items`, `trans_user`, `trans_comment`, `trans_location`, `trans_inventory`) VALUES ('2023-10-08 04:14:13', '1', '1', 'Deleting sale 12', '1', '1.000') 
 Execution Time:0.0047538280487061

SELECT *
FROM `ospos_item_quantities`
WHERE `item_id` = '1'
AND `location_id` = '1' 
 Execution Time:0.002424955368042

SELECT *
FROM `ospos_item_quantities`
WHERE `item_id` = '1'
AND `location_id` = '1' 
 Execution Time:0.00035309791564941

UPDATE `ospos_item_quantities` SET `item_id` = '1', `location_id` = '1', `quantity` = 2982
WHERE `item_id` = '1'
AND `location_id` = '1' 
 Execution Time:0.00094199180603027

UPDATE `ospos_sales` SET `sale_status` = 2
WHERE `sale_id` = '12' 
 Execution Time:0.0046260356903076

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'pahvpcso0d8t50erlgk7ivumradsgtb9'
AND `ip_address` = '::1' 
 Execution Time:0.001068115234375

SELECT GET_LOCK('48fb5902aae2b7db51ef71760e35e357', 300) AS ci_session_lock 
 Execution Time:0.0011069774627686

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'pahvpcso0d8t50erlgk7ivumradsgtb9'
AND `ip_address` = '::1' 
 Execution Time:0.00060701370239258

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00076389312744141

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
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
 Execution Time:0.0016419887542725

SHOW TABLES FROM `ospos` 
 Execution Time:0.009181022644043

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.011955976486206

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.011570930480957

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0006251335144043

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00067996978759766

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00088405609130859

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0011148452758789

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00068092346191406

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_payments_temp (PRIMARY KEY(sale_id), INDEX(sale_id))
			(
				SELECT payments.sale_id,
					SUM(CASE WHEN payments.cash_adjustment = 0 THEN payments.payment_amount ELSE 0 END) AS sale_payment_amount,
					SUM(CASE WHEN payments.cash_adjustment = 1 THEN payments.payment_amount ELSE 0 END) AS sale_cash_adjustment,
					GROUP_CONCAT(CONCAT(payments.payment_type, " ", (payments.payment_amount - payments.cash_refund)) SEPARATOR ", ") AS payment_type
				FROM ospos_sales_payments AS payments
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = payments.sale_id
				WHERE sales.sale_status = 0 AND DATE(sales.sale_time) BETWEEN '2023-09-09' AND '2023-10-08'
				GROUP BY payments.sale_id
			) 
 Execution Time:0.0054178237915039

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_taxes_temp (INDEX(sale_id), INDEX(item_id)) ENGINE=MEMORY
			(
				SELECT sales_items_taxes.sale_id AS sale_id,
					sales_items_taxes.item_id AS item_id,
					sales_items_taxes.line AS line,
					SUM(sales_items_taxes.item_tax_amount) AS tax,
					SUM(CASE WHEN sales_items_taxes.tax_type = 0 THEN sales_items_taxes.item_tax_amount ELSE 0 END) AS internal_tax,
					SUM(CASE WHEN sales_items_taxes.tax_type = 1 THEN sales_items_taxes.item_tax_amount ELSE 0 END) AS sales_tax
				FROM ospos_sales_items_taxes AS sales_items_taxes
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = sales_items_taxes.sale_id
				INNER JOIN ospos_sales_items AS sales_items
					ON sales_items.sale_id = sales_items_taxes.sale_id AND sales_items.line = sales_items_taxes.line
				WHERE sales.sale_status = 0 AND DATE(sales.sale_time) BETWEEN '2023-09-09' AND '2023-10-08'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.00098204612731934

SELECT `sales`.`sale_id` AS `sale_id`, MAX(DATE(sales.sale_time)) AS sale_date, MAX(sales.sale_time) AS sale_time, MAX(sales.invoice_number) AS invoice_number, MAX(sales.quote_number) AS quote_number, SUM(sales_items.quantity_purchased) AS items_purchased, MAX(CONCAT(customer_p.first_name, " ", customer_p.last_name)) AS customer_name, MAX(customer.company_name) AS company_name, ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) - IFNULL(SUM(sales_items_taxes.internal_tax), 0) AS subtotal, IFNULL(SUM(sales_items_taxes.tax), 0) AS tax, ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.sales_tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0) AS total, SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost, (ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.sales_tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit, ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.sales_tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0) AS amount_due, MAX(payments.sale_payment_amount) AS amount_tendered, (MAX(payments.sale_payment_amount)) - (ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.sales_tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS change_due, MAX(payments.payment_type) AS payment_type
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT JOIN `ospos_people` AS `customer_p` ON `sales`.`customer_id` = `customer_p`.`person_id`
LEFT JOIN `ospos_customers` AS `customer` ON `sales`.`customer_id` = `customer`.`person_id`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
WHERE `sales`.`sale_status` =0 AND DATE(sales.sale_time) BETWEEN '2023-09-09' AND '2023-10-08'
GROUP BY `sales`.`sale_id`
 LIMIT 25 
 Execution Time:0.0025391578674316

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_payments_temp (PRIMARY KEY(sale_id), INDEX(sale_id))
			(
				SELECT payments.sale_id,
					SUM(CASE WHEN payments.cash_adjustment = 0 THEN payments.payment_amount ELSE 0 END) AS sale_payment_amount,
					SUM(CASE WHEN payments.cash_adjustment = 1 THEN payments.payment_amount ELSE 0 END) AS sale_cash_adjustment,
					GROUP_CONCAT(CONCAT(payments.payment_type, " ", (payments.payment_amount - payments.cash_refund)) SEPARATOR ", ") AS payment_type
				FROM ospos_sales_payments AS payments
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = payments.sale_id
				WHERE sales.sale_status = 0 AND DATE(sales.sale_time) BETWEEN '2023-09-09' AND '2023-10-08'
				GROUP BY payments.sale_id
			) 
 Execution Time:0.00074005126953125

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_taxes_temp (INDEX(sale_id), INDEX(item_id)) ENGINE=MEMORY
			(
				SELECT sales_items_taxes.sale_id AS sale_id,
					sales_items_taxes.item_id AS item_id,
					sales_items_taxes.line AS line,
					SUM(sales_items_taxes.item_tax_amount) AS tax,
					SUM(CASE WHEN sales_items_taxes.tax_type = 0 THEN sales_items_taxes.item_tax_amount ELSE 0 END) AS internal_tax,
					SUM(CASE WHEN sales_items_taxes.tax_type = 1 THEN sales_items_taxes.item_tax_amount ELSE 0 END) AS sales_tax
				FROM ospos_sales_items_taxes AS sales_items_taxes
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = sales_items_taxes.sale_id
				INNER JOIN ospos_sales_items AS sales_items
					ON sales_items.sale_id = sales_items_taxes.sale_id AND sales_items.line = sales_items_taxes.line
				WHERE sales.sale_status = 0 AND DATE(sales.sale_time) BETWEEN '2023-09-09' AND '2023-10-08'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.00065422058105469

SELECT COUNT(DISTINCT sales.sale_id) AS count
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT JOIN `ospos_people` AS `customer_p` ON `sales`.`customer_id` = `customer_p`.`person_id`
LEFT JOIN `ospos_customers` AS `customer` ON `sales`.`customer_id` = `customer`.`person_id`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
WHERE `sales`.`sale_status` =0 AND DATE(sales.sale_time) BETWEEN '2023-09-09' AND '2023-10-08' 
 Execution Time:0.0018851757049561

SELECT `payment_type`, COUNT(payment_amount) AS count, SUM(payment_amount - cash_refund) AS payment_amount
FROM `ospos_sales` AS `sales`
JOIN `ospos_sales_payments` ON `ospos_sales_payments`.`sale_id` = `sales`.`sale_id`
LEFT JOIN `ospos_people` AS `customer_p` ON `sales`.`customer_id` = `customer_p`.`person_id`
LEFT JOIN `ospos_customers` AS `customer` ON `sales`.`customer_id` = `customer`.`person_id`
WHERE DATE(sales.sale_time) BETWEEN '2023-09-09' AND '2023-10-08'
AND `sales`.`sale_status` =0
GROUP BY `payment_type` 
 Execution Time:0.0023429393768311

