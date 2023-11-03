SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'vkjbgv33o2v9rh6fofi64batr2d2sshf'
AND `ip_address` = '::1' 
 Execution Time:0.00087189674377441

SELECT GET_LOCK('015590b6660c8ddb6bd7178ffb31a450', 300) AS ci_session_lock 
 Execution Time:0.00028705596923828

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'vkjbgv33o2v9rh6fofi64batr2d2sshf'
AND `ip_address` = '::1' 
 Execution Time:0.00046396255493164

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0009160041809082

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
 Execution Time:0.0010650157928467

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00047683715820312

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_suppliersgls'
 LIMIT 1 
 Execution Time:0.00030398368835449

SHOW TABLES FROM `ospos` 
 Execution Time:0.0032880306243896

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00047898292541504

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00049495697021484

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00071096420288086

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00062203407287598

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00039100646972656

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0003969669342041

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00049805641174316

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
				WHERE DATE(sl.ledger_time) < '2023-10-07'
				GROUP BY sl.supplier_id, sp.agency_name
			); 
 Execution Time:0.00080204010009766

CREATE  TABLE IF NOT EXISTS ospos_temp_gl (INDEX(ledger_id), INDEX(supplier_id)) ENGINE=MEMORY
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
				WHERE DATE(sl.ledger_time) BETWEEN '2023-10-07' AND '2023-10-07'
				GROUP BY ledger_id, ledger_time
			);

			
			 
 Execution Time:0.00041007995605469

insert into ospos_temp_gl select *from ospos_temp_gl_op; 
 Execution Time:0.0002598762512207

SELECT `ledger_id`, `ledger_time`, `payment_type`, `supplier_name`, `employee_id`, `reference`, `debit_amount`, `credit_amount`, `balance`, `trans_type`, `user`
FROM `ospos_temp_gl`
WHERE `supplier_id` = '5'
ORDER BY `ledger_id` 
 Execution Time:0.00054788589477539

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_suppliers`.`person_id`
WHERE `ospos_suppliers`.`person_id` = '5' 
 Execution Time:0.00051307678222656

SELECT SUM(debit_amount) AS subtotal
FROM `ospos_temp_gl` 
 Execution Time:0.00034403800964355

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00047111511230469

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00031900405883789

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'vkjbgv33o2v9rh6fofi64batr2d2sshf'
AND `ip_address` = '::1' 
 Execution Time:0.00064396858215332

SELECT GET_LOCK('015590b6660c8ddb6bd7178ffb31a450', 300) AS ci_session_lock 
 Execution Time:0.00037598609924316

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'vkjbgv33o2v9rh6fofi64batr2d2sshf'
AND `ip_address` = '::1' 
 Execution Time:0.00043010711669922

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00047588348388672

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00049400329589844

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00066900253295898

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00043296813964844

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_suppliersgls'
 LIMIT 1 
 Execution Time:0.00078487396240234

SHOW TABLES FROM `ospos` 
 Execution Time:0.0018811225891113

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00044393539428711

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00045895576477051

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00047016143798828

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00048995018005371

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00050687789916992

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00063705444335938

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.001060962677002

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
				WHERE DATE(sl.ledger_time) < '2023-10-07'
				GROUP BY sl.supplier_id, sp.agency_name
			); 
 Execution Time:0.00082802772521973

CREATE  TABLE IF NOT EXISTS ospos_temp_gl (INDEX(ledger_id), INDEX(supplier_id)) ENGINE=MEMORY
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
				WHERE DATE(sl.ledger_time) BETWEEN '2023-10-07' AND '2023-10-07'
				GROUP BY ledger_id, ledger_time
			);

			
			 
 Execution Time:0.00031399726867676

insert into ospos_temp_gl select *from ospos_temp_gl_op; 
 Execution Time:0.00028109550476074

SELECT `ledger_id`, `ledger_time`, `payment_type`, `supplier_name`, `employee_id`, `reference`, `debit_amount`, `credit_amount`, `balance`, `trans_type`, `user`
FROM `ospos_temp_gl`
WHERE `supplier_id` = '5'
ORDER BY `ledger_id` 
 Execution Time:0.00049185752868652

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_suppliers`.`person_id`
WHERE `ospos_suppliers`.`person_id` = '5' 
 Execution Time:0.00053310394287109

SELECT SUM(credit_amount)- sum(debit_amount) as Balance
FROM `ospos_temp_gl` 
 Execution Time:0.00034904479980469

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0006721019744873

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00061798095703125

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'vkjbgv33o2v9rh6fofi64batr2d2sshf'
AND `ip_address` = '::1' 
 Execution Time:0.00067806243896484

SELECT GET_LOCK('015590b6660c8ddb6bd7178ffb31a450', 300) AS ci_session_lock 
 Execution Time:0.0002741813659668

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'vkjbgv33o2v9rh6fofi64batr2d2sshf'
AND `ip_address` = '::1' 
 Execution Time:0.00044107437133789

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00054597854614258

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00047492980957031

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00070714950561523

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00050902366638184

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_suppliersgls'
 LIMIT 1 
 Execution Time:0.00041818618774414

SHOW TABLES FROM `ospos` 
 Execution Time:0.0018417835235596

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00045609474182129

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00046396255493164

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010387897491455

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00058698654174805

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00046491622924805

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0003960132598877

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00057291984558105

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
				WHERE DATE(sl.ledger_time) < '2023-10-07'
				GROUP BY sl.supplier_id, sp.agency_name
			); 
 Execution Time:0.00082111358642578

CREATE  TABLE IF NOT EXISTS ospos_temp_gl (INDEX(ledger_id), INDEX(supplier_id)) ENGINE=MEMORY
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
				WHERE DATE(sl.ledger_time) BETWEEN '2023-10-07' AND '2023-10-07'
				GROUP BY ledger_id, ledger_time
			);

			
			 
 Execution Time:0.00030684471130371

insert into ospos_temp_gl select *from ospos_temp_gl_op; 
 Execution Time:0.00038409233093262

SELECT `ledger_id`, `ledger_time`, `payment_type`, `supplier_name`, `employee_id`, `reference`, `debit_amount`, `credit_amount`, `balance`, `trans_type`, `user`
FROM `ospos_temp_gl`
WHERE `supplier_id` = '5'
ORDER BY `ledger_id` 
 Execution Time:0.00043606758117676

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_suppliers`.`person_id`
WHERE `ospos_suppliers`.`person_id` = '5' 
 Execution Time:0.0005948543548584

SELECT SUM(credit_amount)- sum(debit_amount) as Balance
FROM `ospos_temp_gl` 
 Execution Time:0.00035691261291504

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00078296661376953

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.004133939743042

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'vkjbgv33o2v9rh6fofi64batr2d2sshf'
AND `ip_address` = '::1' 
 Execution Time:0.00046896934509277

SELECT GET_LOCK('015590b6660c8ddb6bd7178ffb31a450', 300) AS ci_session_lock 
 Execution Time:0.00036311149597168

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'vkjbgv33o2v9rh6fofi64batr2d2sshf'
AND `ip_address` = '::1' 
 Execution Time:0.00070691108703613

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00072002410888672

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00067615509033203

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00089097023010254

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00049400329589844

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_suppliersgls'
 LIMIT 1 
 Execution Time:0.00032687187194824

SHOW TABLES FROM `ospos` 
 Execution Time:0.0033609867095947

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
 Execution Time:0.00061893463134766

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00063896179199219

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00043392181396484

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00058794021606445

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00085711479187012

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
				WHERE DATE(sl.ledger_time) < '2023-10-07'
				GROUP BY sl.supplier_id, sp.agency_name
			); 
 Execution Time:0.0010340213775635

CREATE  TABLE IF NOT EXISTS ospos_temp_gl (INDEX(ledger_id), INDEX(supplier_id)) ENGINE=MEMORY
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
				WHERE DATE(sl.ledger_time) BETWEEN '2023-10-07' AND '2023-10-07'
				GROUP BY ledger_id, ledger_time
			);

			
			 
 Execution Time:0.00042486190795898

insert into ospos_temp_gl select *from ospos_temp_gl_op; 
 Execution Time:0.00060296058654785

SELECT `ledger_id`, `ledger_time`, `payment_type`, `supplier_name`, `employee_id`, `reference`, `debit_amount`, `credit_amount`, `balance`, `trans_type`, `user`
FROM `ospos_temp_gl`
WHERE `supplier_id` = '5'
ORDER BY `ledger_id` 
 Execution Time:0.00077009201049805

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_suppliers`.`person_id`
WHERE `ospos_suppliers`.`person_id` = '5' 
 Execution Time:0.00064206123352051

SELECT SUM(credit_amount)- sum(debit_amount) as dr_cr_balance, Case when SUM(credit_amount)- sum(debit_amount) < 0 then  'Debit ' 
		else 'Credit ' end as dr_cr
FROM `ospos_temp_gl` 
 Execution Time:0.00043106079101562

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00053977966308594

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00060915946960449

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'vkjbgv33o2v9rh6fofi64batr2d2sshf'
AND `ip_address` = '::1' 
 Execution Time:0.0011429786682129

SELECT GET_LOCK('015590b6660c8ddb6bd7178ffb31a450', 300) AS ci_session_lock 
 Execution Time:0.00027799606323242

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'vkjbgv33o2v9rh6fofi64batr2d2sshf'
AND `ip_address` = '::1' 
 Execution Time:0.0005040168762207

UPDATE `ospos_sessions` SET `timestamp` = 1696661514, `data` = '__ci_last_regenerate|i:1696661514;person_id|s:1:\"1\";menu_group|s:4:\"home\";'
WHERE `id` = 'vkjbgv33o2v9rh6fofi64batr2d2sshf'
AND `ip_address` = '::1' 
 Execution Time:0.0037641525268555

SELECT RELEASE_LOCK('015590b6660c8ddb6bd7178ffb31a450') AS ci_session_lock 
 Execution Time:0.00029206275939941

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'vkjbgv33o2v9rh6fofi64batr2d2sshf'
AND `ip_address` = '::1' 
 Execution Time:0.0051891803741455

SELECT GET_LOCK('1898def6055882507bb424da09abe4af', 300) AS ci_session_lock 
 Execution Time:0.00020384788513184

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '2emets0ubkbq5c730kc6rc235mtfks3q'
AND `ip_address` = '::1' 
 Execution Time:0.00058197975158691

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00059199333190918

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00050497055053711

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0025749206542969

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00052094459533691

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_suppliersgls'
 LIMIT 1 
 Execution Time:0.00082087516784668

SHOW TABLES FROM `ospos` 
 Execution Time:0.0017960071563721

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00040698051452637

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00039911270141602

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00058889389038086

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00050902366638184

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00051403045654297

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00035810470581055

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00058102607727051

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
				WHERE DATE(sl.ledger_time) < '2023-10-07'
				GROUP BY sl.supplier_id, sp.agency_name
			); 
 Execution Time:0.0022919178009033

CREATE  TABLE IF NOT EXISTS ospos_temp_gl (INDEX(ledger_id), INDEX(supplier_id)) ENGINE=MEMORY
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
				WHERE DATE(sl.ledger_time) BETWEEN '2023-10-07' AND '2023-10-07'
				GROUP BY ledger_id, ledger_time
			);

			
			 
 Execution Time:0.00051116943359375

insert into ospos_temp_gl select *from ospos_temp_gl_op; 
 Execution Time:0.00035190582275391

SELECT `ledger_id`, `ledger_time`, `payment_type`, `supplier_name`, `employee_id`, `reference`, `debit_amount`, `credit_amount`, `balance`, `trans_type`, `user`
FROM `ospos_temp_gl`
WHERE `supplier_id` = '5'
ORDER BY `ledger_id` 
 Execution Time:0.00049114227294922

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_suppliers`.`person_id`
WHERE `ospos_suppliers`.`person_id` = '5' 
 Execution Time:0.00048089027404785

SELECT SUM(credit_amount)- sum(debit_amount) as dr_cr_balance, Case when SUM(credit_amount)- sum(debit_amount) < 0 then  'Debit ' 
		else 'Credit ' end as dr_cr
FROM `ospos_temp_gl` 
 Execution Time:0.00035405158996582

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00048494338989258

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0003209114074707

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '2emets0ubkbq5c730kc6rc235mtfks3q'
AND `ip_address` = '::1' 
 Execution Time:0.00057291984558105

SELECT GET_LOCK('1898def6055882507bb424da09abe4af', 300) AS ci_session_lock 
 Execution Time:0.00036406517028809

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '2emets0ubkbq5c730kc6rc235mtfks3q'
AND `ip_address` = '::1' 
 Execution Time:0.00059700012207031

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00050091743469238

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00047087669372559

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0008690357208252

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00070500373840332

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_suppliersgls'
 LIMIT 1 
 Execution Time:0.00048184394836426

SHOW TABLES FROM `ospos` 
 Execution Time:0.0018379688262939

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00044703483581543

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00054287910461426

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0005030632019043

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00053286552429199

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00046610832214355

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00041079521179199

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0005190372467041

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
				WHERE DATE(sl.ledger_time) < '2023-10-07'
				GROUP BY sl.supplier_id, sp.agency_name
			); 
 Execution Time:0.00098800659179688

CREATE  TABLE IF NOT EXISTS ospos_temp_gl (INDEX(ledger_id), INDEX(supplier_id)) ENGINE=MEMORY
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
				WHERE DATE(sl.ledger_time) BETWEEN '2023-10-07' AND '2023-10-07'
				GROUP BY ledger_id, ledger_time
			);

			
			 
 Execution Time:0.0003199577331543

insert into ospos_temp_gl select *from ospos_temp_gl_op; 
 Execution Time:0.00029897689819336

SELECT `ledger_id`, `ledger_time`, `payment_type`, `supplier_name`, `employee_id`, `reference`, `debit_amount`, `credit_amount`, `balance`, `trans_type`, `user`
FROM `ospos_temp_gl`
WHERE `supplier_id` = '5'
ORDER BY `ledger_id` 
 Execution Time:0.00043702125549316

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_suppliers`.`person_id`
WHERE `ospos_suppliers`.`person_id` = '5' 
 Execution Time:0.0020492076873779

SELECT case when SUM(ROUND(debit_amount, 2)) > SUM(ROUND(credit_amount, 2)) then SUM(ROUND(debit_amount, 2))-SUM(ROUND(credit_amount, 2)) else 0 end AS debit_amount, case when SUM(ROUND(credit_amount, 2)) > SUM(ROUND(debit_amount, 2)) then SUM(ROUND(credit_amount, 2))-SUM(ROUND(debit_amount, 2)) else 0 end AS credit_amount
FROM `ospos_temp_gl` 
 Execution Time:0.00044488906860352

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00063490867614746

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0004889965057373

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '2emets0ubkbq5c730kc6rc235mtfks3q'
AND `ip_address` = '::1' 
 Execution Time:0.00084996223449707

SELECT GET_LOCK('1898def6055882507bb424da09abe4af', 300) AS ci_session_lock 
 Execution Time:0.00034093856811523

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '2emets0ubkbq5c730kc6rc235mtfks3q'
AND `ip_address` = '::1' 
 Execution Time:0.00041103363037109

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00050210952758789

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00044989585876465

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00071287155151367

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00040316581726074

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_suppliersgls'
 LIMIT 1 
 Execution Time:0.00029397010803223

SHOW TABLES FROM `ospos` 
 Execution Time:0.0030219554901123

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00038003921508789

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0003960132598877

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00092983245849609

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00048398971557617

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0003960132598877

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00046586990356445

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00054812431335449

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
				WHERE DATE(sl.ledger_time) < '2023-10-07'
				GROUP BY sl.supplier_id, sp.agency_name
			); 
 Execution Time:0.00083208084106445

CREATE  TABLE IF NOT EXISTS ospos_temp_gl (INDEX(ledger_id), INDEX(supplier_id)) ENGINE=MEMORY
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
				WHERE DATE(sl.ledger_time) BETWEEN '2023-10-07' AND '2023-10-07'
				GROUP BY ledger_id, ledger_time
			);

			
			 
 Execution Time:0.00026392936706543

insert into ospos_temp_gl select *from ospos_temp_gl_op; 
 Execution Time:0.00032496452331543

SELECT `ledger_id`, `ledger_time`, `payment_type`, `supplier_name`, `employee_id`, `reference`, `debit_amount`, `credit_amount`, `balance`, `trans_type`, `user`
FROM `ospos_temp_gl`
WHERE `supplier_id` = '5'
ORDER BY `ledger_id` 
 Execution Time:0.00093412399291992

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_suppliers`.`person_id`
WHERE `ospos_suppliers`.`person_id` = '5' 
 Execution Time:0.00053882598876953

SELECT SUM(debit_amount) debit_sum, SUM(credit_amount) credit_sum, case when SUM(ROUND(debit_amount, 2)) > SUM(ROUND(credit_amount, 2)) then SUM(ROUND(debit_amount, 2))-SUM(ROUND(credit_amount, 2)) else 0 end AS debit_amount, case when SUM(ROUND(credit_amount, 2)) > SUM(ROUND(debit_amount, 2)) then SUM(ROUND(credit_amount, 2))-SUM(ROUND(debit_amount, 2)) else 0 end AS credit_amount
FROM `ospos_temp_gl` 
 Execution Time:0.00073599815368652

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00047707557678223

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00038599967956543

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '2emets0ubkbq5c730kc6rc235mtfks3q'
AND `ip_address` = '::1' 
 Execution Time:0.00057387351989746

SELECT GET_LOCK('1898def6055882507bb424da09abe4af', 300) AS ci_session_lock 
 Execution Time:0.0002901554107666

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '2emets0ubkbq5c730kc6rc235mtfks3q'
AND `ip_address` = '::1' 
 Execution Time:0.00042486190795898

UPDATE `ospos_sessions` SET `timestamp` = 1696661891, `data` = '__ci_last_regenerate|i:1696661891;person_id|s:1:\"1\";menu_group|s:4:\"home\";'
WHERE `id` = '2emets0ubkbq5c730kc6rc235mtfks3q'
AND `ip_address` = '::1' 
 Execution Time:0.0042200088500977

SELECT RELEASE_LOCK('1898def6055882507bb424da09abe4af') AS ci_session_lock 
 Execution Time:0.00020122528076172

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '2emets0ubkbq5c730kc6rc235mtfks3q'
AND `ip_address` = '::1' 
 Execution Time:0.00035810470581055

SELECT GET_LOCK('49b67bba192e3bc09e9a440a805d2b40', 300) AS ci_session_lock 
 Execution Time:0.00023484230041504

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '0fje8mscn96pgnhabdsf5ahh0efn6vjl'
AND `ip_address` = '::1' 
 Execution Time:0.00062012672424316

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00049901008605957

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00051498413085938

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0006558895111084

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00044584274291992

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_suppliersgls'
 LIMIT 1 
 Execution Time:0.0003669261932373

SHOW TABLES FROM `ospos` 
 Execution Time:0.0017819404602051

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00044798851013184

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00044012069702148

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00085115432739258

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0007328987121582

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00072193145751953

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00048589706420898

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00058484077453613

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
				WHERE DATE(sl.ledger_time) < '2023-10-07'
				GROUP BY sl.supplier_id, sp.agency_name
			); 
 Execution Time:0.0011398792266846

CREATE  TABLE IF NOT EXISTS ospos_temp_gl (INDEX(ledger_id), INDEX(supplier_id)) ENGINE=MEMORY
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
				WHERE DATE(sl.ledger_time) BETWEEN '2023-10-07' AND '2023-10-07'
				GROUP BY ledger_id, ledger_time
			);

			
			 
 Execution Time:0.00035786628723145

insert into ospos_temp_gl select *from ospos_temp_gl_op; 
 Execution Time:0.00027012825012207

SELECT `ledger_id`, `ledger_time`, `payment_type`, `supplier_name`, `employee_id`, `reference`, `debit_amount`, `credit_amount`, `balance`, `trans_type`, `user`
FROM `ospos_temp_gl`
WHERE `supplier_id` = '5'
ORDER BY `ledger_id` 
 Execution Time:0.00052094459533691

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_suppliers`.`person_id`
WHERE `ospos_suppliers`.`person_id` = '5' 
 Execution Time:0.00064802169799805

SELECT SUM(debit_amount) debit_sum, SUM(credit_amount) credit_sum, case when SUM(ROUND(debit_amount, 2)) > SUM(ROUND(credit_amount, 2)) then SUM(ROUND(debit_amount, 2))-SUM(ROUND(credit_amount, 2)) else 0 end AS debit_amount_balance, case when SUM(ROUND(credit_amount, 2)) > SUM(ROUND(debit_amount, 2)) then SUM(ROUND(credit_amount, 2))-SUM(ROUND(debit_amount, 2)) else 0 end AS credit_amount_balance
FROM `ospos_temp_gl` 
 Execution Time:0.00054311752319336

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00054597854614258

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00045490264892578

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '0fje8mscn96pgnhabdsf5ahh0efn6vjl'
AND `ip_address` = '::1' 
 Execution Time:0.00055193901062012

SELECT GET_LOCK('49b67bba192e3bc09e9a440a805d2b40', 300) AS ci_session_lock 
 Execution Time:0.00034213066101074

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '0fje8mscn96pgnhabdsf5ahh0efn6vjl'
AND `ip_address` = '::1' 
 Execution Time:0.00040292739868164

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00055789947509766

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00054597854614258

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00077080726623535

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00048708915710449

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_suppliersgls'
 LIMIT 1 
 Execution Time:0.00032615661621094

SHOW TABLES FROM `ospos` 
 Execution Time:0.0017788410186768

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00046110153198242

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00048303604125977

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0005340576171875

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0015158653259277

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00088000297546387

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0003809928894043

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00056600570678711

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
				WHERE DATE(sl.ledger_time) < '2023-10-07'
				GROUP BY sl.supplier_id, sp.agency_name
			); 
 Execution Time:0.00096607208251953

CREATE  TABLE IF NOT EXISTS ospos_temp_gl (INDEX(ledger_id), INDEX(supplier_id)) ENGINE=MEMORY
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
				WHERE DATE(sl.ledger_time) BETWEEN '2023-10-07' AND '2023-10-07'
				GROUP BY ledger_id, ledger_time
			);

			
			 
 Execution Time:0.00030088424682617

insert into ospos_temp_gl select *from ospos_temp_gl_op; 
 Execution Time:0.00055193901062012

SELECT `ledger_id`, `ledger_time`, `payment_type`, `supplier_name`, `employee_id`, `reference`, `debit_amount`, `credit_amount`, `balance`, `trans_type`, `user`
FROM `ospos_temp_gl`
WHERE `supplier_id` = '5'
ORDER BY `ledger_id` 
 Execution Time:0.00052905082702637

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_suppliers`.`person_id`
WHERE `ospos_suppliers`.`person_id` = '5' 
 Execution Time:0.00054287910461426

SELECT SUM(debit_amount) debit_sum, SUM(credit_amount) credit_sum, case when SUM(ROUND(debit_amount, 2)) > SUM(ROUND(credit_amount, 2)) then SUM(ROUND(debit_amount, 2))-SUM(ROUND(credit_amount, 2)) else 0 end AS debit_amount_balance, case when SUM(ROUND(credit_amount, 2)) > SUM(ROUND(debit_amount, 2)) then SUM(ROUND(credit_amount, 2))-SUM(ROUND(debit_amount, 2)) else 0 end AS credit_amount_balance
FROM `ospos_temp_gl` 
 Execution Time:0.00044083595275879

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00048589706420898

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00058817863464355

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '0fje8mscn96pgnhabdsf5ahh0efn6vjl'
AND `ip_address` = '::1' 
 Execution Time:0.00066089630126953

SELECT GET_LOCK('49b67bba192e3bc09e9a440a805d2b40', 300) AS ci_session_lock 
 Execution Time:0.00032377243041992

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '0fje8mscn96pgnhabdsf5ahh0efn6vjl'
AND `ip_address` = '::1' 
 Execution Time:0.00042605400085449

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00048995018005371

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00051689147949219

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00090813636779785

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00049114227294922

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_suppliersgls'
 LIMIT 1 
 Execution Time:0.00038504600524902

SHOW TABLES FROM `ospos` 
 Execution Time:0.0033431053161621

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00051093101501465

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00054407119750977

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00046992301940918

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0005500316619873

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00060701370239258

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00060415267944336

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00051379203796387

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
				WHERE DATE(sl.ledger_time) < '2023-10-07'
				GROUP BY sl.supplier_id, sp.agency_name
			); 
 Execution Time:0.00084710121154785

CREATE  TABLE IF NOT EXISTS ospos_temp_gl (INDEX(ledger_id), INDEX(supplier_id)) ENGINE=MEMORY
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
				WHERE DATE(sl.ledger_time) BETWEEN '2023-10-07' AND '2023-10-07'
				GROUP BY ledger_id, ledger_time
			);

			
			 
 Execution Time:0.0003049373626709

insert into ospos_temp_gl select *from ospos_temp_gl_op; 
 Execution Time:0.00020408630371094

SELECT `ledger_id`, `ledger_time`, `payment_type`, `supplier_name`, `employee_id`, `reference`, `debit_amount`, `credit_amount`, `balance`, `trans_type`, `user`
FROM `ospos_temp_gl`
WHERE `supplier_id` = '5'
ORDER BY `ledger_id` 
 Execution Time:0.00036311149597168

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_suppliers`.`person_id`
WHERE `ospos_suppliers`.`person_id` = '5' 
 Execution Time:0.00045680999755859

SELECT SUM(debit_amount) debit_sum, SUM(credit_amount) credit_sum, case when SUM(ROUND(debit_amount, 2)) > SUM(ROUND(credit_amount, 2)) then SUM(ROUND(debit_amount, 2))-SUM(ROUND(credit_amount, 2)) else 0 end AS debit_amount_balance, case when SUM(ROUND(credit_amount, 2)) > SUM(ROUND(debit_amount, 2)) then SUM(ROUND(credit_amount, 2))-SUM(ROUND(debit_amount, 2)) else 0 end AS credit_amount_balance
FROM `ospos_temp_gl` 
 Execution Time:0.00048589706420898

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00074982643127441

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00041413307189941

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '0fje8mscn96pgnhabdsf5ahh0efn6vjl'
AND `ip_address` = '::1' 
 Execution Time:0.00063419342041016

SELECT GET_LOCK('49b67bba192e3bc09e9a440a805d2b40', 300) AS ci_session_lock 
 Execution Time:0.00028014183044434

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '0fje8mscn96pgnhabdsf5ahh0efn6vjl'
AND `ip_address` = '::1' 
 Execution Time:0.00048613548278809

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0013809204101562

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0012578964233398

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0024418830871582

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00081610679626465

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_suppliersgls'
 LIMIT 1 
 Execution Time:0.00048685073852539

SHOW TABLES FROM `ospos` 
 Execution Time:0.0026829242706299

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00038599967956543

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00072789192199707

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00098490715026855

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010600090026855

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0021660327911377

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0016260147094727

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00067591667175293

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
				WHERE DATE(sl.ledger_time) < '2023-10-07'
				GROUP BY sl.supplier_id, sp.agency_name
			); 
 Execution Time:0.0010688304901123

CREATE  TABLE IF NOT EXISTS ospos_temp_gl (INDEX(ledger_id), INDEX(supplier_id)) ENGINE=MEMORY
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
				WHERE DATE(sl.ledger_time) BETWEEN '2023-10-07' AND '2023-10-07'
				GROUP BY ledger_id, ledger_time
			);

			
			 
 Execution Time:0.00031399726867676

insert into ospos_temp_gl select *from ospos_temp_gl_op; 
 Execution Time:0.00041413307189941

SELECT `ledger_id`, `ledger_time`, `payment_type`, `supplier_name`, `employee_id`, `reference`, `debit_amount`, `credit_amount`, `balance`, `trans_type`, `user`
FROM `ospos_temp_gl`
WHERE `supplier_id` = '5'
ORDER BY `ledger_id` 
 Execution Time:0.00058698654174805

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_suppliers`.`person_id`
WHERE `ospos_suppliers`.`person_id` = '5' 
 Execution Time:0.00064802169799805

SELECT SUM(debit_amount) debit_sum, SUM(credit_amount) credit_sum, case when SUM(ROUND(debit_amount, 2)) > SUM(ROUND(credit_amount, 2)) then SUM(ROUND(debit_amount, 2))-SUM(ROUND(credit_amount, 2)) else 0 end AS debit_amount_balance, case when SUM(ROUND(credit_amount, 2)) > SUM(ROUND(debit_amount, 2)) then SUM(ROUND(credit_amount, 2))-SUM(ROUND(debit_amount, 2)) else 0 end AS credit_amount_balance
FROM `ospos_temp_gl` 
 Execution Time:0.0004570484161377

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00072884559631348

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00043010711669922

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '0fje8mscn96pgnhabdsf5ahh0efn6vjl'
AND `ip_address` = '::1' 
 Execution Time:0.00053906440734863

SELECT GET_LOCK('49b67bba192e3bc09e9a440a805d2b40', 300) AS ci_session_lock 
 Execution Time:0.00032281875610352

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '0fje8mscn96pgnhabdsf5ahh0efn6vjl'
AND `ip_address` = '::1' 
 Execution Time:0.00039291381835938

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00067496299743652

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00047683715820312

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00087618827819824

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00043702125549316

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_suppliersgls'
 LIMIT 1 
 Execution Time:0.00035405158996582

SHOW TABLES FROM `ospos` 
 Execution Time:0.0025770664215088

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00041913986206055

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00041508674621582

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00060606002807617

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00058197975158691

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00037407875061035

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00033688545227051

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00071096420288086

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
				WHERE DATE(sl.ledger_time) < '2023-10-07'
				GROUP BY sl.supplier_id, sp.agency_name
			); 
 Execution Time:0.00094199180603027

CREATE  TABLE IF NOT EXISTS ospos_temp_gl (INDEX(ledger_id), INDEX(supplier_id)) ENGINE=MEMORY
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
				WHERE DATE(sl.ledger_time) BETWEEN '2023-10-07' AND '2023-10-07'
				GROUP BY ledger_id, ledger_time
			);

			
			 
 Execution Time:0.00027608871459961

insert into ospos_temp_gl select *from ospos_temp_gl_op; 
 Execution Time:0.00023794174194336

SELECT `ledger_id`, `ledger_time`, `payment_type`, `supplier_name`, `employee_id`, `reference`, `debit_amount`, `credit_amount`, `balance`, `trans_type`, `user`
FROM `ospos_temp_gl`
WHERE `supplier_id` = '5'
ORDER BY `ledger_id` 
 Execution Time:0.00035786628723145

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_suppliers`.`person_id`
WHERE `ospos_suppliers`.`person_id` = '5' 
 Execution Time:0.00066208839416504

SELECT SUM(debit_amount) debit_sum, SUM(credit_amount) credit_sum, case when SUM(ROUND(debit_amount, 2)) > SUM(ROUND(credit_amount, 2)) then SUM(ROUND(debit_amount, 2))-SUM(ROUND(credit_amount, 2)) else 0 end AS debit_amount_balance, case when SUM(ROUND(credit_amount, 2)) > SUM(ROUND(debit_amount, 2)) then SUM(ROUND(credit_amount, 2))-SUM(ROUND(debit_amount, 2)) else 0 end AS credit_amount_balance
FROM `ospos_temp_gl` 
 Execution Time:0.00078082084655762

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00056290626525879

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00046396255493164

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '0fje8mscn96pgnhabdsf5ahh0efn6vjl'
AND `ip_address` = '::1' 
 Execution Time:0.00057387351989746

SELECT GET_LOCK('49b67bba192e3bc09e9a440a805d2b40', 300) AS ci_session_lock 
 Execution Time:0.00036501884460449

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '0fje8mscn96pgnhabdsf5ahh0efn6vjl'
AND `ip_address` = '::1' 
 Execution Time:0.00037503242492676

UPDATE `ospos_sessions` SET `timestamp` = 1696662236, `data` = '__ci_last_regenerate|i:1696662236;person_id|s:1:\"1\";menu_group|s:4:\"home\";'
WHERE `id` = '0fje8mscn96pgnhabdsf5ahh0efn6vjl'
AND `ip_address` = '::1' 
 Execution Time:0.0067019462585449

SELECT RELEASE_LOCK('49b67bba192e3bc09e9a440a805d2b40') AS ci_session_lock 
 Execution Time:0.0002291202545166

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '0fje8mscn96pgnhabdsf5ahh0efn6vjl'
AND `ip_address` = '::1' 
 Execution Time:0.0053658485412598

SELECT GET_LOCK('4c61f9665bfbe07035f7aaf872b43478', 300) AS ci_session_lock 
 Execution Time:0.00020384788513184

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '9vkcbb87sj0ubve6nl4fdetg3mm7qk8k'
AND `ip_address` = '::1' 
 Execution Time:0.0003349781036377

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00058507919311523

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00045680999755859

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00077486038208008

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00051403045654297

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_suppliersgls'
 LIMIT 1 
 Execution Time:0.00034785270690918

SHOW TABLES FROM `ospos` 
 Execution Time:0.0017321109771729

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00050711631774902

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00051116943359375

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00066995620727539

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00043702125549316

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0009608268737793

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00092720985412598

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00054788589477539

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
				WHERE DATE(sl.ledger_time) < '2023-10-07'
				GROUP BY sl.supplier_id, sp.agency_name
			); 
 Execution Time:0.0010290145874023

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
				WHERE DATE(sl.ledger_time) BETWEEN '2023-10-07' AND '2023-10-07'
				GROUP BY ledger_id, ledger_time
			);

			
			 
 Execution Time:0.00072789192199707

insert into ospos_temp_gl select *from ospos_temp_gl_op; 
 Execution Time:0.00023412704467773

SELECT `ledger_id`, `ledger_time`, `payment_type`, `supplier_name`, `employee_id`, `reference`, `debit_amount`, `credit_amount`, `balance`, `trans_type`, `user`
FROM `ospos_temp_gl`
WHERE `supplier_id` = '5'
ORDER BY `ledger_id` 
 Execution Time:0.00026082992553711

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_suppliers`.`person_id`
WHERE `ospos_suppliers`.`person_id` = '5' 
 Execution Time:0.00045299530029297

SELECT SUM(debit_amount) debit_sum, SUM(credit_amount) credit_sum, case when SUM(ROUND(debit_amount, 2)) > SUM(ROUND(credit_amount, 2)) then SUM(ROUND(debit_amount, 2))-SUM(ROUND(credit_amount, 2)) else 0 end AS debit_amount_balance, case when SUM(ROUND(credit_amount, 2)) > SUM(ROUND(debit_amount, 2)) then SUM(ROUND(credit_amount, 2))-SUM(ROUND(debit_amount, 2)) else 0 end AS credit_amount_balance
FROM `ospos_temp_gl` 
 Execution Time:0.00065207481384277

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00050497055053711

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0003659725189209

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '9vkcbb87sj0ubve6nl4fdetg3mm7qk8k'
AND `ip_address` = '::1' 
 Execution Time:0.00064396858215332

SELECT GET_LOCK('4c61f9665bfbe07035f7aaf872b43478', 300) AS ci_session_lock 
 Execution Time:0.00030803680419922

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '9vkcbb87sj0ubve6nl4fdetg3mm7qk8k'
AND `ip_address` = '::1' 
 Execution Time:0.00032901763916016

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00049209594726562

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00039005279541016

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00063586235046387

SHOW TABLES FROM `ospos` 
 Execution Time:0.0018420219421387

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00037908554077148

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00040698051452637

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00076699256896973

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00045585632324219

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00034904479980469

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00035810470581055

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00045299530029297

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1' 
 Execution Time:0.00051689147949219

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00040483474731445

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_receivings'
 LIMIT 1 
 Execution Time:0.00038003921508789

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_customers'
 LIMIT 1 
 Execution Time:0.00034904479980469

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_discounts'
 LIMIT 1 
 Execution Time:0.00032687187194824

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.00037407875061035

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_suppliers'
 LIMIT 1 
 Execution Time:0.00032997131347656

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_suppliersgls'
 LIMIT 1 
 Execution Time:0.0003049373626709

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.00034403800964355

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '9vkcbb87sj0ubve6nl4fdetg3mm7qk8k'
AND `ip_address` = '::1' 
 Execution Time:0.00065088272094727

SELECT GET_LOCK('4c61f9665bfbe07035f7aaf872b43478', 300) AS ci_session_lock 
 Execution Time:0.00028014183044434

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '9vkcbb87sj0ubve6nl4fdetg3mm7qk8k'
AND `ip_address` = '::1' 
 Execution Time:0.00038790702819824

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00046110153198242

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0003659725189209

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00068092346191406

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00066113471984863

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_suppliersgls'
 LIMIT 1 
 Execution Time:0.00051283836364746

SHOW TABLES FROM `ospos` 
 Execution Time:0.0019781589508057

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00042605400085449

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00052690505981445

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00050592422485352

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0006411075592041

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00048708915710449

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00042104721069336

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00057506561279297

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_suppliers`.`person_id` = `ospos_people`.`person_id`
WHERE `category` = 0
AND `deleted` = 0
ORDER BY `company_name` ASC 
 Execution Time:0.0033929347991943

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '9vkcbb87sj0ubve6nl4fdetg3mm7qk8k'
AND `ip_address` = '::1' 
 Execution Time:0.00048089027404785

SELECT GET_LOCK('4c61f9665bfbe07035f7aaf872b43478', 300) AS ci_session_lock 
 Execution Time:0.0003669261932373

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '9vkcbb87sj0ubve6nl4fdetg3mm7qk8k'
AND `ip_address` = '::1' 
 Execution Time:0.00042510032653809

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00088715553283691

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00055289268493652

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00087618827819824

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00044012069702148

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_suppliersgls'
 LIMIT 1 
 Execution Time:0.00036787986755371

SHOW TABLES FROM `ospos` 
 Execution Time:0.0020358562469482

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00049686431884766

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00070810317993164

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00052881240844727

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00050210952758789

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00047802925109863

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0005190372467041

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0005640983581543

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
				WHERE DATE(sl.ledger_time) < '2023-10-01'
				GROUP BY sl.supplier_id, sp.agency_name
			); 
 Execution Time:0.012571096420288

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
				WHERE DATE(sl.ledger_time) BETWEEN '2023-10-01' AND '2023-10-07'
				GROUP BY ledger_id, ledger_time
			);

			
			 
 Execution Time:0.0011250972747803

insert into ospos_temp_gl select *from ospos_temp_gl_op; 
 Execution Time:0.00054621696472168

SELECT `ledger_id`, `ledger_time`, `payment_type`, `supplier_name`, `employee_id`, `reference`, `debit_amount`, `credit_amount`, `balance`, `trans_type`, `user`
FROM `ospos_temp_gl`
WHERE `supplier_id` = '5'
ORDER BY `ledger_id` 
 Execution Time:0.0013930797576904

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_suppliers`.`person_id`
WHERE `ospos_suppliers`.`person_id` = '5' 
 Execution Time:0.00055503845214844

SELECT SUM(debit_amount) debit_sum, SUM(credit_amount) credit_sum, case when SUM(ROUND(debit_amount, 2)) > SUM(ROUND(credit_amount, 2)) then SUM(ROUND(debit_amount, 2))-SUM(ROUND(credit_amount, 2)) else 0 end AS debit_amount_balance, case when SUM(ROUND(credit_amount, 2)) > SUM(ROUND(debit_amount, 2)) then SUM(ROUND(credit_amount, 2))-SUM(ROUND(debit_amount, 2)) else 0 end AS credit_amount_balance
FROM `ospos_temp_gl` 
 Execution Time:0.00043606758117676

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00052809715270996

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00042510032653809

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '9vkcbb87sj0ubve6nl4fdetg3mm7qk8k'
AND `ip_address` = '::1' 
 Execution Time:0.00054812431335449

SELECT GET_LOCK('4c61f9665bfbe07035f7aaf872b43478', 300) AS ci_session_lock 
 Execution Time:0.00038003921508789

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '9vkcbb87sj0ubve6nl4fdetg3mm7qk8k'
AND `ip_address` = '::1' 
 Execution Time:0.00042080879211426

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00055217742919922

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'payments%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00054693222045898

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'payments!_%' ESCAPE '!' 
 Execution Time:0.00036787986755371

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00076699256896973

SHOW TABLES FROM `ospos` 
 Execution Time:0.0019211769104004

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00049686431884766

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00043797492980957

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00052189826965332

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00050592422485352

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00043487548828125

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00045394897460938

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00050091743469238

SELECT SUM(debit_amount) AS debit_amount, SUM(credit_amount) AS credit_amount
FROM `ospos_supplier_ledgers`
WHERE `supplier_id` = -1
GROUP BY `supplier_id` 
 Execution Time:0.00092005729675293

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '9vkcbb87sj0ubve6nl4fdetg3mm7qk8k'
AND `ip_address` = '::1' 
 Execution Time:0.00054216384887695

SELECT GET_LOCK('4c61f9665bfbe07035f7aaf872b43478', 300) AS ci_session_lock 
 Execution Time:0.00028705596923828

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '9vkcbb87sj0ubve6nl4fdetg3mm7qk8k'
AND `ip_address` = '::1' 
 Execution Time:0.00042009353637695

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00057792663574219

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'suppliers%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00050997734069824

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'suppliers!_%' ESCAPE '!' 
 Execution Time:0.00034689903259277

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.001317024230957

SHOW TABLES FROM `ospos` 
 Execution Time:0.0026040077209473

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0004730224609375

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00045990943908691

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00057697296142578

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00065994262695312

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00051307678222656

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00043511390686035

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00054192543029785

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_suppliers`.`person_id` = `ospos_people`.`person_id`
WHERE `deleted` = 0
AND  `company_name` LIKE '%b%' ESCAPE '!'
ORDER BY `company_name` ASC 
 Execution Time:0.00062012672424316

SELECT DISTINCT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_suppliers`.`person_id` = `ospos_people`.`person_id`
WHERE `deleted` = 0
AND  `agency_name` LIKE '%b%' ESCAPE '!'
AND `agency_name` IS NOT NULL
ORDER BY `agency_name` ASC 
 Execution Time:0.012478113174438

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
 Execution Time:0.014179944992065

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '9vkcbb87sj0ubve6nl4fdetg3mm7qk8k'
AND `ip_address` = '::1' 
 Execution Time:0.00047802925109863

SELECT GET_LOCK('4c61f9665bfbe07035f7aaf872b43478', 300) AS ci_session_lock 
 Execution Time:0.00046896934509277

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '9vkcbb87sj0ubve6nl4fdetg3mm7qk8k'
AND `ip_address` = '::1' 
 Execution Time:0.00060415267944336

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00060200691223145

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'payments%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00043797492980957

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'payments!_%' ESCAPE '!' 
 Execution Time:0.00035381317138672

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0009620189666748

SHOW TABLES FROM `ospos` 
 Execution Time:0.00199294090271

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00044608116149902

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0020999908447266

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00061392784118652

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00059103965759277

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00050902366638184

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00048708915710449

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00059103965759277

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_suppliers`.`person_id`
WHERE `ospos_suppliers`.`person_id` = '5' 
 Execution Time:0.00054407119750977

SELECT SUM(debit_amount) AS debit_amount, SUM(credit_amount) AS credit_amount
FROM `ospos_supplier_ledgers`
WHERE `supplier_id` = '5'
GROUP BY `supplier_id` 
 Execution Time:0.00046515464782715

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_suppliers`.`person_id`
WHERE `ospos_suppliers`.`person_id` = '5' 
 Execution Time:0.00054287910461426

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '9vkcbb87sj0ubve6nl4fdetg3mm7qk8k'
AND `ip_address` = '::1' 
 Execution Time:0.00057506561279297

SELECT GET_LOCK('4c61f9665bfbe07035f7aaf872b43478', 300) AS ci_session_lock 
 Execution Time:0.00029206275939941

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '9vkcbb87sj0ubve6nl4fdetg3mm7qk8k'
AND `ip_address` = '::1' 
 Execution Time:0.00043487548828125

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00052213668823242

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'payments%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00046515464782715

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'payments!_%' ESCAPE '!' 
 Execution Time:0.00053310394287109

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00079488754272461

SHOW TABLES FROM `ospos` 
 Execution Time:0.0019001960754395

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00049400329589844

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00049901008605957

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00050115585327148

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00048995018005371

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00041604042053223

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00056195259094238

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00053501129150391

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '9vkcbb87sj0ubve6nl4fdetg3mm7qk8k'
AND `ip_address` = '::1' 
 Execution Time:0.00059795379638672

SELECT GET_LOCK('4c61f9665bfbe07035f7aaf872b43478', 300) AS ci_session_lock 
 Execution Time:0.00031495094299316

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '9vkcbb87sj0ubve6nl4fdetg3mm7qk8k'
AND `ip_address` = '::1' 
 Execution Time:0.0004429817199707

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00054001808166504

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'payments%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00049781799316406

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'payments!_%' ESCAPE '!' 
 Execution Time:0.00034403800964355

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00068998336791992

SHOW TABLES FROM `ospos` 
 Execution Time:0.001788854598999

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0004119873046875

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00057506561279297

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00050187110900879

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00049805641174316

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00045394897460938

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00034403800964355

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00058913230895996

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '9vkcbb87sj0ubve6nl4fdetg3mm7qk8k'
AND `ip_address` = '::1' 
 Execution Time:0.0006411075592041

SELECT GET_LOCK('4c61f9665bfbe07035f7aaf872b43478', 300) AS ci_session_lock 
 Execution Time:0.00033307075500488

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '9vkcbb87sj0ubve6nl4fdetg3mm7qk8k'
AND `ip_address` = '::1' 
 Execution Time:0.00054192543029785

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0011940002441406

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'payments%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00055599212646484

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'payments!_%' ESCAPE '!' 
 Execution Time:0.00041985511779785

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00073099136352539

SHOW TABLES FROM `ospos` 
 Execution Time:0.0019018650054932

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00046706199645996

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00053191184997559

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0008389949798584

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00054693222045898

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00049686431884766

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00054407119750977

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00050806999206543

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '9vkcbb87sj0ubve6nl4fdetg3mm7qk8k'
AND `ip_address` = '::1' 
 Execution Time:0.0005650520324707

SELECT GET_LOCK('4c61f9665bfbe07035f7aaf872b43478', 300) AS ci_session_lock 
 Execution Time:0.00033688545227051

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '9vkcbb87sj0ubve6nl4fdetg3mm7qk8k'
AND `ip_address` = '::1' 
 Execution Time:0.00045490264892578

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00054693222045898

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'payments%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00049114227294922

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'payments!_%' ESCAPE '!' 
 Execution Time:0.00045609474182129

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0011610984802246

SHOW TABLES FROM `ospos` 
 Execution Time:0.0027520656585693

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00053787231445312

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00046896934509277

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00080680847167969

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00050497055053711

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00043678283691406

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0003349781036377

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0006260871887207

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '9vkcbb87sj0ubve6nl4fdetg3mm7qk8k'
AND `ip_address` = '::1' 
 Execution Time:0.00046610832214355

SELECT GET_LOCK('4c61f9665bfbe07035f7aaf872b43478', 300) AS ci_session_lock 
 Execution Time:0.0078568458557129

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '9vkcbb87sj0ubve6nl4fdetg3mm7qk8k'
AND `ip_address` = '::1' 
 Execution Time:0.0005640983581543

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00053691864013672

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'payments%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00055813789367676

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'payments!_%' ESCAPE '!' 
 Execution Time:0.0003359317779541

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00086593627929688

SHOW TABLES FROM `ospos` 
 Execution Time:0.0027470588684082

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00042295455932617

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00044488906860352

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00051712989807129

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00095009803771973

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00040197372436523

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0005030632019043

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00047802925109863

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '9vkcbb87sj0ubve6nl4fdetg3mm7qk8k'
AND `ip_address` = '::1' 
 Execution Time:0.00056600570678711

SELECT GET_LOCK('4c61f9665bfbe07035f7aaf872b43478', 300) AS ci_session_lock 
 Execution Time:0.00029802322387695

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '9vkcbb87sj0ubve6nl4fdetg3mm7qk8k'
AND `ip_address` = '::1' 
 Execution Time:0.00054001808166504

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00048303604125977

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'payments%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00045084953308105

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'payments!_%' ESCAPE '!' 
 Execution Time:0.00033783912658691

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00073003768920898

SHOW TABLES FROM `ospos` 
 Execution Time:0.0018019676208496

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00048398971557617

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00044512748718262

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0006098747253418

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00049901008605957

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00041103363037109

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00041699409484863

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00046896934509277

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '9vkcbb87sj0ubve6nl4fdetg3mm7qk8k'
AND `ip_address` = '::1' 
 Execution Time:0.00052809715270996

SELECT GET_LOCK('4c61f9665bfbe07035f7aaf872b43478', 300) AS ci_session_lock 
 Execution Time:0.00041794776916504

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '9vkcbb87sj0ubve6nl4fdetg3mm7qk8k'
AND `ip_address` = '::1' 
 Execution Time:0.00042295455932617

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00051689147949219

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'payments%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00045204162597656

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'payments!_%' ESCAPE '!' 
 Execution Time:0.00035619735717773

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00072908401489258

SHOW TABLES FROM `ospos` 
 Execution Time:0.0017561912536621

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00043320655822754

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00068211555480957

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0005490779876709

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00050616264343262

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00040602684020996

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00043702125549316

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00064706802368164

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '9vkcbb87sj0ubve6nl4fdetg3mm7qk8k'
AND `ip_address` = '::1' 
 Execution Time:0.00057792663574219

SELECT GET_LOCK('4c61f9665bfbe07035f7aaf872b43478', 300) AS ci_session_lock 
 Execution Time:0.0014169216156006

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '9vkcbb87sj0ubve6nl4fdetg3mm7qk8k'
AND `ip_address` = '::1' 
 Execution Time:0.0007472038269043

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00068497657775879

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'payments%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00051307678222656

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'payments!_%' ESCAPE '!' 
 Execution Time:0.00040602684020996

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00068402290344238

SHOW TABLES FROM `ospos` 
 Execution Time:0.0024690628051758

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00044798851013184

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0004420280456543

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00072503089904785

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00054812431335449

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00049304962158203

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00049805641174316

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00048303604125977

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '9vkcbb87sj0ubve6nl4fdetg3mm7qk8k'
AND `ip_address` = '::1' 
 Execution Time:0.0006101131439209

SELECT GET_LOCK('4c61f9665bfbe07035f7aaf872b43478', 300) AS ci_session_lock 
 Execution Time:0.00028800964355469

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '9vkcbb87sj0ubve6nl4fdetg3mm7qk8k'
AND `ip_address` = '::1' 
 Execution Time:0.00037097930908203

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00051403045654297

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'payments%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00047016143798828

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'payments!_%' ESCAPE '!' 
 Execution Time:0.00028896331787109

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00065779685974121

SHOW TABLES FROM `ospos` 
 Execution Time:0.0018088817596436

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00042200088500977

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00038290023803711

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00048494338989258

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0005338191986084

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00034403800964355

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00035190582275391

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00057101249694824

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'receivings%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.0013608932495117

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'receivings%' ESCAPE '!'
AND `deleted` = 0
 LIMIT 1 
 Execution Time:0.00057387351989746

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00040006637573242

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00036191940307617

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_suppliers`.`person_id`
WHERE `ospos_suppliers`.`person_id` = '5' 
 Execution Time:0.0011429786682129

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_suppliers`.`person_id`
WHERE `ospos_suppliers`.`person_id` = '5' 
 Execution Time:0.00042104721069336

INSERT INTO `ospos_supplier_ledgers` (`ledger_time`, `supplier_id`, `employee_id`, `reference`, `debit_amount`, `credit_amount`, `payment_type`, `balance`) VALUES ('2023-10-07 03:04:51', '5', '1', 'PV', '333', 0, 'Cash Payment', 492652) 
 Execution Time:0.00070905685424805

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '9vkcbb87sj0ubve6nl4fdetg3mm7qk8k'
AND `ip_address` = '::1' 
 Execution Time:0.00082993507385254

SELECT GET_LOCK('4c61f9665bfbe07035f7aaf872b43478', 300) AS ci_session_lock 
 Execution Time:0.00038313865661621

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '9vkcbb87sj0ubve6nl4fdetg3mm7qk8k'
AND `ip_address` = '::1' 
 Execution Time:0.00043606758117676

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00051498413085938

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'payments%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00049114227294922

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'payments!_%' ESCAPE '!' 
 Execution Time:0.00047802925109863

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00072216987609863

SHOW TABLES FROM `ospos` 
 Execution Time:0.0017659664154053

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0005190372467041

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00051283836364746

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00051593780517578

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00087189674377441

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.000579833984375

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00045394897460938

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00052499771118164

SELECT SUM(debit_amount) AS debit_amount, SUM(credit_amount) AS credit_amount
FROM `ospos_supplier_ledgers`
WHERE `supplier_id` = -1
GROUP BY `supplier_id` 
 Execution Time:0.00078892707824707

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '9vkcbb87sj0ubve6nl4fdetg3mm7qk8k'
AND `ip_address` = '::1' 
 Execution Time:0.00070595741271973

SELECT GET_LOCK('4c61f9665bfbe07035f7aaf872b43478', 300) AS ci_session_lock 
 Execution Time:0.00042104721069336

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '9vkcbb87sj0ubve6nl4fdetg3mm7qk8k'
AND `ip_address` = '::1' 
 Execution Time:0.00059390068054199

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0006558895111084

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0006868839263916

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0014181137084961

SHOW TABLES FROM `ospos` 
 Execution Time:0.0019450187683105

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0004279613494873

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00049185752868652

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00048708915710449

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00052595138549805

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00048995018005371

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00055098533630371

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00052189826965332

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1' 
 Execution Time:0.00047111511230469

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00049519538879395

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_receivings'
 LIMIT 1 
 Execution Time:0.00034689903259277

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_customers'
 LIMIT 1 
 Execution Time:0.00033998489379883

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_discounts'
 LIMIT 1 
 Execution Time:0.00035285949707031

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.00088977813720703

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_suppliers'
 LIMIT 1 
 Execution Time:0.00093913078308105

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_suppliersgls'
 LIMIT 1 
 Execution Time:0.00054788589477539

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.00034809112548828

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '9vkcbb87sj0ubve6nl4fdetg3mm7qk8k'
AND `ip_address` = '::1' 
 Execution Time:0.00049901008605957

SELECT GET_LOCK('4c61f9665bfbe07035f7aaf872b43478', 300) AS ci_session_lock 
 Execution Time:0.00034308433532715

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '9vkcbb87sj0ubve6nl4fdetg3mm7qk8k'
AND `ip_address` = '::1' 
 Execution Time:0.00040602684020996

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00064301490783691

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00043082237243652

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00080108642578125

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00056695938110352

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_suppliersgls'
 LIMIT 1 
 Execution Time:0.00042104721069336

SHOW TABLES FROM `ospos` 
 Execution Time:0.0016460418701172

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00030708312988281

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00034999847412109

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00079989433288574

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00066423416137695

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00054812431335449

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00048208236694336

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00054097175598145

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_suppliers`.`person_id` = `ospos_people`.`person_id`
WHERE `category` = 0
AND `deleted` = 0
ORDER BY `company_name` ASC 
 Execution Time:0.00063395500183105

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '9vkcbb87sj0ubve6nl4fdetg3mm7qk8k'
AND `ip_address` = '::1' 
 Execution Time:0.00042915344238281

SELECT GET_LOCK('4c61f9665bfbe07035f7aaf872b43478', 300) AS ci_session_lock 
 Execution Time:0.00037693977355957

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '9vkcbb87sj0ubve6nl4fdetg3mm7qk8k'
AND `ip_address` = '::1' 
 Execution Time:0.00052905082702637

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00057601928710938

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00046110153198242

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0010330677032471

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0004880428314209

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_suppliersgls'
 LIMIT 1 
 Execution Time:0.00041294097900391

SHOW TABLES FROM `ospos` 
 Execution Time:0.0034279823303223

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0003509521484375

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00055694580078125

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00071096420288086

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0005040168762207

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00036787986755371

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00053095817565918

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00053000450134277

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
				WHERE DATE(sl.ledger_time) < '2023-10-07'
				GROUP BY sl.supplier_id, sp.agency_name
			); 
 Execution Time:0.00071907043457031

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
				WHERE DATE(sl.ledger_time) BETWEEN '2023-10-07' AND '2023-10-07'
				GROUP BY ledger_id, ledger_time
			);

			
			 
 Execution Time:0.00076484680175781

insert into ospos_temp_gl select *from ospos_temp_gl_op; 
 Execution Time:0.00018191337585449

SELECT `ledger_id`, `ledger_time`, `payment_type`, `supplier_name`, `employee_id`, `reference`, `debit_amount`, `credit_amount`, `balance`, `trans_type`, `user`
FROM `ospos_temp_gl`
WHERE `supplier_id` = '5'
ORDER BY `ledger_id` 
 Execution Time:0.00026082992553711

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_suppliers`.`person_id`
WHERE `ospos_suppliers`.`person_id` = '5' 
 Execution Time:0.0003960132598877

SELECT SUM(debit_amount) debit_sum, SUM(credit_amount) credit_sum, case when SUM(ROUND(debit_amount, 2)) > SUM(ROUND(credit_amount, 2)) then SUM(ROUND(debit_amount, 2))-SUM(ROUND(credit_amount, 2)) else 0 end AS debit_amount_balance, case when SUM(ROUND(credit_amount, 2)) > SUM(ROUND(debit_amount, 2)) then SUM(ROUND(credit_amount, 2))-SUM(ROUND(debit_amount, 2)) else 0 end AS credit_amount_balance
FROM `ospos_temp_gl` 
 Execution Time:0.00032305717468262

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0013291835784912

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00043702125549316

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '9vkcbb87sj0ubve6nl4fdetg3mm7qk8k'
AND `ip_address` = '::1' 
 Execution Time:0.00054693222045898

SELECT GET_LOCK('4c61f9665bfbe07035f7aaf872b43478', 300) AS ci_session_lock 
 Execution Time:0.00039196014404297

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '9vkcbb87sj0ubve6nl4fdetg3mm7qk8k'
AND `ip_address` = '::1' 
 Execution Time:0.00049114227294922

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00065898895263672

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00042200088500977

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00070309638977051

SHOW TABLES FROM `ospos` 
 Execution Time:0.0018000602722168

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0004119873046875

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00048017501831055

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00049304962158203

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00055384635925293

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00044107437133789

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00048995018005371

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00049901008605957

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1' 
 Execution Time:0.00087213516235352

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00051498413085938

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_receivings'
 LIMIT 1 
 Execution Time:0.00035810470581055

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_customers'
 LIMIT 1 
 Execution Time:0.00039100646972656

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_discounts'
 LIMIT 1 
 Execution Time:0.00040483474731445

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.00050997734069824

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_suppliers'
 LIMIT 1 
 Execution Time:0.00040507316589355

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_suppliersgls'
 LIMIT 1 
 Execution Time:0.00032401084899902

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.00070905685424805

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '9vkcbb87sj0ubve6nl4fdetg3mm7qk8k'
AND `ip_address` = '::1' 
 Execution Time:0.00048089027404785

SELECT GET_LOCK('4c61f9665bfbe07035f7aaf872b43478', 300) AS ci_session_lock 
 Execution Time:0.00034594535827637

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '9vkcbb87sj0ubve6nl4fdetg3mm7qk8k'
AND `ip_address` = '::1' 
 Execution Time:0.00042891502380371

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00060486793518066

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00081706047058105

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0010600090026855

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00050687789916992

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_suppliers'
 LIMIT 1 
 Execution Time:0.00038695335388184

SHOW TABLES FROM `ospos` 
 Execution Time:0.0017979145050049

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00036501884460449

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00042295455932617

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00058293342590332

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00056314468383789

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00044798851013184

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00038504600524902

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00055599212646484

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_suppliers`.`person_id` = `ospos_people`.`person_id`
WHERE `category` = 0
AND `deleted` = 0
ORDER BY `company_name` ASC 
 Execution Time:0.00057601928710938

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '9vkcbb87sj0ubve6nl4fdetg3mm7qk8k'
AND `ip_address` = '::1' 
 Execution Time:0.00048995018005371

SELECT GET_LOCK('4c61f9665bfbe07035f7aaf872b43478', 300) AS ci_session_lock 
 Execution Time:0.00042295455932617

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '9vkcbb87sj0ubve6nl4fdetg3mm7qk8k'
AND `ip_address` = '::1' 
 Execution Time:0.00044012069702148

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00056195259094238

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00043702125549316

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00087809562683105

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00062394142150879

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_suppliers'
 LIMIT 1 
 Execution Time:0.00081706047058105

SHOW TABLES FROM `ospos` 
 Execution Time:0.0016419887542725

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00040483474731445

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00044894218444824

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00051283836364746

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00061893463134766

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0004880428314209

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00043106079101562

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00058603286743164

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_taxes_temp (INDEX(sale_id), INDEX(item_id)) ENGINE=MEMORY
			(
				SELECT sales_items_taxes.sale_id AS sale_id,
					sales_items_taxes.item_id AS item_id,
					sales_items_taxes.line AS line,
					SUM(ROUND(sales_items_taxes.item_tax_amount, 2)) AS tax,
					SUM(ROUND(CASE WHEN sales_items_taxes.tax_type = 0 THEN sales_items_taxes.item_tax_amount ELSE 0 END, 2)) AS internal_tax,
					SUM(ROUND(CASE WHEN sales_items_taxes.tax_type = 1 THEN sales_items_taxes.item_tax_amount ELSE 0 END, 2)) AS sales_tax
				FROM ospos_sales_items_taxes AS sales_items_taxes
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = sales_items_taxes.sale_id
				INNER JOIN ospos_sales_items AS sales_items
					ON sales_items.sale_id = sales_items_taxes.sale_id AND sales_items.line = sales_items_taxes.line
				WHERE DATE(sales.sale_time) BETWEEN '2023-09-08' AND '2023-10-07'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.00069999694824219

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_payments_temp (PRIMARY KEY(sale_id), INDEX(sale_id))
			(
				SELECT payments.sale_id AS sale_id,
					SUM(CASE WHEN payments.cash_adjustment = 0 THEN payments.payment_amount ELSE 0 END) AS sale_payment_amount,
					SUM(CASE WHEN payments.cash_adjustment = 1 THEN payments.payment_amount ELSE 0 END) AS sale_cash_adjustment,
					SUM(payments.cash_refund) AS sale_cash_refund,
					GROUP_CONCAT(CONCAT(payments.payment_type, " ", (payments.payment_amount - payments.cash_refund)) SEPARATOR ", ") AS payment_type
				FROM ospos_sales_payments AS payments
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = payments.sale_id
				WHERE DATE(sales.sale_time) BETWEEN '2023-09-08' AND '2023-10-07'
				GROUP BY payments.sale_id
			) 
 Execution Time:0.0054550170898438

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_temp (INDEX(sale_date), INDEX(sale_time), INDEX(sale_id))
			(
				SELECT
					MAX(DATE(sales.sale_time)) AS sale_date,
					MAX(sales.sale_time) AS sale_time,
					sales.sale_id AS sale_id,
					MAX(sales.sale_status) AS sale_status,
					MAX(sales.sale_type) AS sale_type,
					MAX(sales.comment) AS comment,
					MAX(sales.invoice_number) AS invoice_number,
					MAX(sales.quote_number) AS quote_number,
					MAX(sales.customer_id) AS customer_id,
					MAX(CONCAT(customer_p.first_name, " ", customer_p.last_name)) AS customer_name,
					MAX(customer_p.first_name) AS customer_first_name,
					MAX(customer_p.last_name) AS customer_last_name,
					MAX(customer_p.email) AS customer_email,
					MAX(customer_p.comments) AS customer_comments,
					MAX(customer.company_name) AS customer_company_name,
					MAX(sales.employee_id) AS employee_id,
					MAX(CONCAT(employee.first_name, " ", employee.last_name)) AS employee_name,
					items.item_id AS item_id,
					MAX(items.name) AS name,
					MAX(items.item_number) AS item_number,
					MAX(items.category) AS category,
					MAX(items.supplier_id) AS supplier_id,
					MAX(sales_items.quantity_purchased) AS quantity_purchased,
					MAX(sales_items.item_cost_price) AS item_cost_price,
					MAX(sales_items.item_unit_price) AS item_unit_price,
					MAX(sales_items.discount) AS discount,
					sales_items.discount_type AS discount_type,
					sales_items.line AS line,
					MAX(sales_items.serialnumber) AS serialnumber,
					MAX(sales_items.item_location) AS item_location,
					MAX(sales_items.description) AS description,
					MAX(payments.payment_type) AS payment_type,
					MAX(payments.sale_payment_amount) AS sale_payment_amount,
					
					ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) - IFNULL(SUM(sales_items_taxes.internal_tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0) AS subtotal,
					IFNULL(SUM(sales_items_taxes.tax), 0) AS tax,
					ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.sales_tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0) AS total,
					SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost,
					(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) - IFNULL(SUM(sales_items_taxes.internal_tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit
					
				FROM ospos_sales_items AS sales_items
				INNER JOIN ospos_sales AS sales
					ON sales_items.sale_id = sales.sale_id
				INNER JOIN ospos_items AS items
					ON sales_items.item_id = items.item_id
				LEFT OUTER JOIN ospos_sales_payments_temp AS payments
					ON sales_items.sale_id = payments.sale_id
				LEFT OUTER JOIN ospos_suppliers AS supplier
					ON items.supplier_id = supplier.person_id
				LEFT OUTER JOIN ospos_people AS customer_p
					ON sales.customer_id = customer_p.person_id
				LEFT OUTER JOIN ospos_customers AS customer
					ON sales.customer_id = customer.person_id
				LEFT OUTER JOIN ospos_people AS employee
					ON sales.employee_id = employee.person_id
				LEFT OUTER JOIN ospos_sales_items_taxes_temp AS sales_items_taxes
					ON sales_items.sale_id = sales_items_taxes.sale_id AND sales_items.item_id = sales_items_taxes.item_id AND sales_items.line = sales_items_taxes.line
				WHERE DATE(sales.sale_time) BETWEEN '2023-09-08' AND '2023-10-07'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.019810914993286

SELECT `sale_id`, MAX(CASE
			WHEN sale_type = 0 && sale_status = 0 THEN 'POS'
			WHEN sale_type = 1 && sale_status = 0 THEN 'INV'
			WHEN sale_type = 2 && sale_status = 1 THEN 'W/O'
			WHEN sale_type = 3 && sale_status = 1 THEN 'Q'
			WHEN sale_type = 4 && sale_status = 0 THEN 'RET'
			WHEN sale_status = 2 THEN 'CNL'
			ELSE ''
			END) AS type_code, MAX(sale_status) as sale_status, MAX(sale_time) AS sale_time, MAX(name) AS name, MAX(category) AS category, MAX(item_number) AS item_number, SUM(quantity_purchased) AS items_purchased, SUM(subtotal) AS subtotal, SUM(tax) AS tax, SUM(total) AS total, SUM(cost) AS cost, SUM(profit) AS profit, MAX(discount_type) AS discount_type, MAX(discount) AS discount
FROM `ospos_sales_items_temp`
WHERE `supplier_id` = '5'
AND `sale_status` = 0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 )
GROUP BY `item_id`
ORDER BY `sale_id` 
 Execution Time:0.00088906288146973

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_suppliers`.`person_id`
WHERE `ospos_suppliers`.`person_id` = '5' 
 Execution Time:0.00047492980957031

SELECT SUM(subtotal) AS subtotal, SUM(tax) AS tax, SUM(total) AS total, SUM(cost) AS cost, SUM(profit) AS profit
FROM `ospos_sales_items_temp`
WHERE `supplier_id` = '5'
AND `sale_status` = 0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ) 
 Execution Time:0.00052905082702637

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00048518180847168

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00035500526428223

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '9vkcbb87sj0ubve6nl4fdetg3mm7qk8k'
AND `ip_address` = '::1' 
 Execution Time:0.00048303604125977

SELECT GET_LOCK('4c61f9665bfbe07035f7aaf872b43478', 300) AS ci_session_lock 
 Execution Time:0.00041508674621582

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '9vkcbb87sj0ubve6nl4fdetg3mm7qk8k'
AND `ip_address` = '::1' 
 Execution Time:0.00044703483581543

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00067305564880371

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00046920776367188

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00071501731872559

SHOW TABLES FROM `ospos` 
 Execution Time:0.0016908645629883

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00039196014404297

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00044107437133789

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00055813789367676

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00060486793518066

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00083088874816895

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00045204162597656

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00054407119750977

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1' 
 Execution Time:0.00052499771118164

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00048303604125977

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_receivings'
 LIMIT 1 
 Execution Time:0.0004119873046875

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_customers'
 LIMIT 1 
 Execution Time:0.00040292739868164

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_discounts'
 LIMIT 1 
 Execution Time:0.00049495697021484

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.00059294700622559

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_suppliers'
 LIMIT 1 
 Execution Time:0.00045514106750488

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_suppliersgls'
 LIMIT 1 
 Execution Time:0.00031304359436035

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.0002739429473877

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '9vkcbb87sj0ubve6nl4fdetg3mm7qk8k'
AND `ip_address` = '::1' 
 Execution Time:0.00050902366638184

SELECT GET_LOCK('4c61f9665bfbe07035f7aaf872b43478', 300) AS ci_session_lock 
 Execution Time:0.00034809112548828

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '9vkcbb87sj0ubve6nl4fdetg3mm7qk8k'
AND `ip_address` = '::1' 
 Execution Time:0.00041389465332031

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00063800811767578

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
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
 Execution Time:0.0013818740844727

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00067305564880371

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_suppliers'
 LIMIT 1 
 Execution Time:0.00055599212646484

SHOW TABLES FROM `ospos` 
 Execution Time:0.0016751289367676

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00037217140197754

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0004119873046875

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00066304206848145

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00058197975158691

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00046205520629883

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00046610832214355

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0006260871887207

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_suppliers`.`person_id` = `ospos_people`.`person_id`
WHERE `category` = 0
AND `deleted` = 0
ORDER BY `company_name` ASC 
 Execution Time:0.00068306922912598

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '9vkcbb87sj0ubve6nl4fdetg3mm7qk8k'
AND `ip_address` = '::1' 
 Execution Time:0.00064301490783691

SELECT GET_LOCK('4c61f9665bfbe07035f7aaf872b43478', 300) AS ci_session_lock 
 Execution Time:0.00027990341186523

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '9vkcbb87sj0ubve6nl4fdetg3mm7qk8k'
AND `ip_address` = '::1' 
 Execution Time:0.00044894218444824

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00047397613525391

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00040388107299805

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00068116188049316

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00063896179199219

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_suppliers'
 LIMIT 1 
 Execution Time:0.00036811828613281

SHOW TABLES FROM `ospos` 
 Execution Time:0.0024349689483643

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0003659725189209

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0003349781036377

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00039887428283691

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00032615661621094

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00030207633972168

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00042986869812012

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0003960132598877

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_taxes_temp (INDEX(sale_id), INDEX(item_id)) ENGINE=MEMORY
			(
				SELECT sales_items_taxes.sale_id AS sale_id,
					sales_items_taxes.item_id AS item_id,
					sales_items_taxes.line AS line,
					SUM(ROUND(sales_items_taxes.item_tax_amount, 2)) AS tax,
					SUM(ROUND(CASE WHEN sales_items_taxes.tax_type = 0 THEN sales_items_taxes.item_tax_amount ELSE 0 END, 2)) AS internal_tax,
					SUM(ROUND(CASE WHEN sales_items_taxes.tax_type = 1 THEN sales_items_taxes.item_tax_amount ELSE 0 END, 2)) AS sales_tax
				FROM ospos_sales_items_taxes AS sales_items_taxes
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = sales_items_taxes.sale_id
				INNER JOIN ospos_sales_items AS sales_items
					ON sales_items.sale_id = sales_items_taxes.sale_id AND sales_items.line = sales_items_taxes.line
				WHERE DATE(sales.sale_time) BETWEEN '2023-09-08' AND '2023-10-07'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.00057387351989746

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_payments_temp (PRIMARY KEY(sale_id), INDEX(sale_id))
			(
				SELECT payments.sale_id AS sale_id,
					SUM(CASE WHEN payments.cash_adjustment = 0 THEN payments.payment_amount ELSE 0 END) AS sale_payment_amount,
					SUM(CASE WHEN payments.cash_adjustment = 1 THEN payments.payment_amount ELSE 0 END) AS sale_cash_adjustment,
					SUM(payments.cash_refund) AS sale_cash_refund,
					GROUP_CONCAT(CONCAT(payments.payment_type, " ", (payments.payment_amount - payments.cash_refund)) SEPARATOR ", ") AS payment_type
				FROM ospos_sales_payments AS payments
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = payments.sale_id
				WHERE DATE(sales.sale_time) BETWEEN '2023-09-08' AND '2023-10-07'
				GROUP BY payments.sale_id
			) 
 Execution Time:0.0039229393005371

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_temp (INDEX(sale_date), INDEX(sale_time), INDEX(sale_id))
			(
				SELECT
					MAX(DATE(sales.sale_time)) AS sale_date,
					MAX(sales.sale_time) AS sale_time,
					sales.sale_id AS sale_id,
					MAX(sales.sale_status) AS sale_status,
					MAX(sales.sale_type) AS sale_type,
					MAX(sales.comment) AS comment,
					MAX(sales.invoice_number) AS invoice_number,
					MAX(sales.quote_number) AS quote_number,
					MAX(sales.customer_id) AS customer_id,
					MAX(CONCAT(customer_p.first_name, " ", customer_p.last_name)) AS customer_name,
					MAX(customer_p.first_name) AS customer_first_name,
					MAX(customer_p.last_name) AS customer_last_name,
					MAX(customer_p.email) AS customer_email,
					MAX(customer_p.comments) AS customer_comments,
					MAX(customer.company_name) AS customer_company_name,
					MAX(sales.employee_id) AS employee_id,
					MAX(CONCAT(employee.first_name, " ", employee.last_name)) AS employee_name,
					items.item_id AS item_id,
					MAX(items.name) AS name,
					MAX(items.item_number) AS item_number,
					MAX(items.category) AS category,
					MAX(items.supplier_id) AS supplier_id,
					MAX(sales_items.quantity_purchased) AS quantity_purchased,
					MAX(sales_items.item_cost_price) AS item_cost_price,
					MAX(sales_items.item_unit_price) AS item_unit_price,
					MAX(sales_items.discount) AS discount,
					sales_items.discount_type AS discount_type,
					sales_items.line AS line,
					MAX(sales_items.serialnumber) AS serialnumber,
					MAX(sales_items.item_location) AS item_location,
					MAX(sales_items.description) AS description,
					MAX(payments.payment_type) AS payment_type,
					MAX(payments.sale_payment_amount) AS sale_payment_amount,
					
					ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) - IFNULL(SUM(sales_items_taxes.internal_tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0) AS subtotal,
					IFNULL(SUM(sales_items_taxes.tax), 0) AS tax,
					ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.sales_tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0) AS total,
					SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost,
					(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) - IFNULL(SUM(sales_items_taxes.internal_tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit
					
				FROM ospos_sales_items AS sales_items
				INNER JOIN ospos_sales AS sales
					ON sales_items.sale_id = sales.sale_id
				INNER JOIN ospos_items AS items
					ON sales_items.item_id = items.item_id
				LEFT OUTER JOIN ospos_sales_payments_temp AS payments
					ON sales_items.sale_id = payments.sale_id
				LEFT OUTER JOIN ospos_suppliers AS supplier
					ON items.supplier_id = supplier.person_id
				LEFT OUTER JOIN ospos_people AS customer_p
					ON sales.customer_id = customer_p.person_id
				LEFT OUTER JOIN ospos_customers AS customer
					ON sales.customer_id = customer.person_id
				LEFT OUTER JOIN ospos_people AS employee
					ON sales.employee_id = employee.person_id
				LEFT OUTER JOIN ospos_sales_items_taxes_temp AS sales_items_taxes
					ON sales_items.sale_id = sales_items_taxes.sale_id AND sales_items.item_id = sales_items_taxes.item_id AND sales_items.line = sales_items_taxes.line
				WHERE DATE(sales.sale_time) BETWEEN '2023-09-08' AND '2023-10-07'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.016669034957886

SELECT `sale_id`, MAX(CASE
			WHEN sale_type = 0 && sale_status = 0 THEN 'POS'
			WHEN sale_type = 1 && sale_status = 0 THEN 'INV'
			WHEN sale_type = 2 && sale_status = 1 THEN 'W/O'
			WHEN sale_type = 3 && sale_status = 1 THEN 'Q'
			WHEN sale_type = 4 && sale_status = 0 THEN 'RET'
			WHEN sale_status = 2 THEN 'CNL'
			ELSE ''
			END) AS type_code, MAX(sale_status) as sale_status, MAX(sale_time) AS sale_time, MAX(name) AS name, MAX(category) AS category, MAX(item_number) AS item_number, SUM(quantity_purchased) AS items_purchased, SUM(subtotal) AS subtotal, SUM(tax) AS tax, SUM(total) AS total, SUM(cost) AS cost, SUM(profit) AS profit, MAX(discount_type) AS discount_type, MAX(discount) AS discount
FROM `ospos_sales_items_temp`
WHERE `supplier_id` = '5'
AND `sale_status` = 0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 )
GROUP BY `item_id`
ORDER BY `sale_id` 
 Execution Time:0.00068211555480957

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_suppliers`.`person_id`
WHERE `ospos_suppliers`.`person_id` = '5' 
 Execution Time:0.00053596496582031

SELECT SUM(subtotal) AS subtotal, SUM(tax) AS tax, SUM(total) AS total, SUM(cost) AS cost, SUM(profit) AS profit
FROM `ospos_sales_items_temp`
WHERE `supplier_id` = '5'
AND `sale_status` = 0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ) 
 Execution Time:0.0004878044128418

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00072097778320312

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00049400329589844

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '9vkcbb87sj0ubve6nl4fdetg3mm7qk8k'
AND `ip_address` = '::1' 
 Execution Time:0.001554012298584

SELECT GET_LOCK('4c61f9665bfbe07035f7aaf872b43478', 300) AS ci_session_lock 
 Execution Time:0.00057315826416016

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '9vkcbb87sj0ubve6nl4fdetg3mm7qk8k'
AND `ip_address` = '::1' 
 Execution Time:0.00066900253295898

UPDATE `ospos_sessions` SET `timestamp` = 1696665753, `data` = '__ci_last_regenerate|i:1696665753;person_id|s:1:\"1\";menu_group|s:4:\"home\";pv_balance|i:0;pv_total|s:3:\"333\";pv_stock_source|s:1:\"1\";pv_mode|s:7:\"receive\";pv_supplier|i:-1;'
WHERE `id` = '9vkcbb87sj0ubve6nl4fdetg3mm7qk8k'
AND `ip_address` = '::1' 
 Execution Time:0.005079984664917

SELECT RELEASE_LOCK('4c61f9665bfbe07035f7aaf872b43478') AS ci_session_lock 
 Execution Time:0.00030899047851562

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '9vkcbb87sj0ubve6nl4fdetg3mm7qk8k'
AND `ip_address` = '::1' 
 Execution Time:0.00050497055053711

SELECT GET_LOCK('3079c04fb2de88bac8bd7c7c65df4bbe', 300) AS ci_session_lock 
 Execution Time:0.00028014183044434

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'vqmc1ddvg1jk493e7d203i25ms86rb79'
AND `ip_address` = '::1' 
 Execution Time:0.00051379203796387

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010111331939697

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'payments%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00095510482788086

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'payments!_%' ESCAPE '!' 
 Execution Time:0.00076508522033691

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0015420913696289

SHOW TABLES FROM `ospos` 
 Execution Time:0.0028159618377686

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0013449192047119

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00164794921875

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00075078010559082

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0065109729766846

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00054001808166504

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00045895576477051

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00055503845214844

SELECT SUM(debit_amount) AS debit_amount, SUM(credit_amount) AS credit_amount
FROM `ospos_supplier_ledgers`
WHERE `supplier_id` = -1
GROUP BY `supplier_id` 
 Execution Time:0.0013020038604736

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'vqmc1ddvg1jk493e7d203i25ms86rb79'
AND `ip_address` = '::1' 
 Execution Time:0.0064139366149902

SELECT GET_LOCK('3079c04fb2de88bac8bd7c7c65df4bbe', 300) AS ci_session_lock 
 Execution Time:0.00047707557678223

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'vqmc1ddvg1jk493e7d203i25ms86rb79'
AND `ip_address` = '::1' 
 Execution Time:0.00046992301940918

UPDATE `ospos_sessions` SET `timestamp` = 1696670653, `data` = '__ci_last_regenerate|i:1696670653;person_id|s:1:\"1\";menu_group|s:4:\"home\";pv_balance|i:0;pv_total|s:3:\"333\";pv_stock_source|s:1:\"1\";pv_mode|s:7:\"receive\";pv_supplier|i:-1;'
WHERE `id` = 'vqmc1ddvg1jk493e7d203i25ms86rb79'
AND `ip_address` = '::1' 
 Execution Time:0.0064170360565186

SELECT RELEASE_LOCK('3079c04fb2de88bac8bd7c7c65df4bbe') AS ci_session_lock 
 Execution Time:0.00024604797363281

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'vqmc1ddvg1jk493e7d203i25ms86rb79'
AND `ip_address` = '::1' 
 Execution Time:0.00036001205444336

SELECT GET_LOCK('9afbb4f41781ff3e7202fa802771d9e7', 300) AS ci_session_lock 
 Execution Time:0.0002901554107666

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '1966g8mhnkg0ah08j5e51lfkmfub7mol'
AND `ip_address` = '::1' 
 Execution Time:0.00058221817016602

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0048139095306396

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'payments%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0023369789123535

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'payments!_%' ESCAPE '!' 
 Execution Time:0.0019350051879883

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0040969848632812

SHOW TABLES FROM `ospos` 
 Execution Time:0.0041887760162354

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0014028549194336

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0014541149139404

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00088310241699219

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00077104568481445

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00068402290344238

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00061893463134766

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00075411796569824

SELECT SUM(debit_amount) AS debit_amount, SUM(credit_amount) AS credit_amount
FROM `ospos_supplier_ledgers`
WHERE `supplier_id` = -1
GROUP BY `supplier_id` 
 Execution Time:0.002655029296875

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '1966g8mhnkg0ah08j5e51lfkmfub7mol'
AND `ip_address` = '::1' 
 Execution Time:0.0055840015411377

SELECT GET_LOCK('9afbb4f41781ff3e7202fa802771d9e7', 300) AS ci_session_lock 
 Execution Time:0.0071470737457275

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '1966g8mhnkg0ah08j5e51lfkmfub7mol'
AND `ip_address` = '::1' 
 Execution Time:0.0054020881652832

UPDATE `ospos_sessions` SET `timestamp` = 1696672357, `data` = '__ci_last_regenerate|i:1696672357;person_id|s:1:\"1\";menu_group|s:4:\"home\";pv_balance|i:0;pv_total|s:3:\"333\";pv_stock_source|s:1:\"1\";pv_mode|s:7:\"receive\";pv_supplier|i:-1;'
WHERE `id` = '1966g8mhnkg0ah08j5e51lfkmfub7mol'
AND `ip_address` = '::1' 
 Execution Time:0.0044150352478027

SELECT RELEASE_LOCK('9afbb4f41781ff3e7202fa802771d9e7') AS ci_session_lock 
 Execution Time:0.00034499168395996

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '1966g8mhnkg0ah08j5e51lfkmfub7mol'
AND `ip_address` = '::1' 
 Execution Time:0.016152858734131

SELECT GET_LOCK('1f4a3fdf47e4d53c0a7a9158fc720b01', 300) AS ci_session_lock 
 Execution Time:0.00034379959106445

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'h43qlpl1vm4eqou8b13v8d8cd9609a69'
AND `ip_address` = '::1' 
 Execution Time:0.0006108283996582

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00077986717224121

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00089406967163086

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0016381740570068

SHOW TABLES FROM `ospos` 
 Execution Time:0.0040490627288818

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00050497055053711

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00062298774719238

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00087404251098633

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00081086158752441

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010628700256348

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00051999092102051

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0021481513977051

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1' 
 Execution Time:0.0013070106506348

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.0006709098815918

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_receivings'
 LIMIT 1 
 Execution Time:0.00098204612731934

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_customers'
 LIMIT 1 
 Execution Time:0.00052499771118164

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_discounts'
 LIMIT 1 
 Execution Time:0.00037693977355957

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.00037598609924316

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_suppliers'
 LIMIT 1 
 Execution Time:0.00034594535827637

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_suppliersgls'
 LIMIT 1 
 Execution Time:0.00041985511779785

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.00061202049255371

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'h43qlpl1vm4eqou8b13v8d8cd9609a69'
AND `ip_address` = '::1' 
 Execution Time:0.0016400814056396

SELECT GET_LOCK('1f4a3fdf47e4d53c0a7a9158fc720b01', 300) AS ci_session_lock 
 Execution Time:0.00048995018005371

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'h43qlpl1vm4eqou8b13v8d8cd9609a69'
AND `ip_address` = '::1' 
 Execution Time:0.0047500133514404

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00072097778320312

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0005800724029541

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00094103813171387

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
 Execution Time:0.00080299377441406

SHOW TABLES FROM `ospos` 
 Execution Time:0.0028321743011475

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00055384635925293

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0008080005645752

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0013768672943115

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00061917304992676

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00048184394836426

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00047779083251953

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00062108039855957

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_suppliers`.`person_id` = `ospos_people`.`person_id`
WHERE `category` = 0
AND `deleted` = 0
ORDER BY `company_name` ASC 
 Execution Time:0.0051209926605225

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'h43qlpl1vm4eqou8b13v8d8cd9609a69'
AND `ip_address` = '::1' 
 Execution Time:0.00066614151000977

SELECT GET_LOCK('1f4a3fdf47e4d53c0a7a9158fc720b01', 300) AS ci_session_lock 
 Execution Time:0.00034713745117188

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'h43qlpl1vm4eqou8b13v8d8cd9609a69'
AND `ip_address` = '::1' 
 Execution Time:0.00069999694824219

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00074315071105957

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00062108039855957

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00098705291748047

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00060391426086426

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_suppliersgls'
 LIMIT 1 
 Execution Time:0.00049018859863281

SHOW TABLES FROM `ospos` 
 Execution Time:0.0033302307128906

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00056982040405273

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0020980834960938

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00092887878417969

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0012490749359131

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0013442039489746

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00064492225646973

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00099396705627441

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
				WHERE DATE(sl.ledger_time) < '2023-10-07'
				GROUP BY sl.supplier_id, sp.agency_name
			); 
 Execution Time:0.0081090927124023

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
				WHERE DATE(sl.ledger_time) BETWEEN '2023-10-07' AND '2023-10-07'
				GROUP BY ledger_id, ledger_time
			);

			
			 
 Execution Time:0.0018658638000488

insert into ospos_temp_gl select *from ospos_temp_gl_op; 
 Execution Time:0.00035381317138672

SELECT `ledger_id`, `ledger_time`, `payment_type`, `supplier_name`, `employee_id`, `reference`, `debit_amount`, `credit_amount`, `balance`, `trans_type`, `user`
FROM `ospos_temp_gl`
WHERE `supplier_id` = '5'
ORDER BY `ledger_id` 
 Execution Time:0.00070905685424805

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_suppliers`.`person_id`
WHERE `ospos_suppliers`.`person_id` = '5' 
 Execution Time:0.00093388557434082

SELECT SUM(debit_amount) debit_sum, SUM(credit_amount) credit_sum, case when SUM(ROUND(debit_amount, 2)) > SUM(ROUND(credit_amount, 2)) then SUM(ROUND(debit_amount, 2))-SUM(ROUND(credit_amount, 2)) else 0 end AS debit_amount_balance, case when SUM(ROUND(credit_amount, 2)) > SUM(ROUND(debit_amount, 2)) then SUM(ROUND(credit_amount, 2))-SUM(ROUND(debit_amount, 2)) else 0 end AS credit_amount_balance
FROM `ospos_temp_gl`
WHERE `supplier_id` = '5' 
 Execution Time:0.0009150505065918

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.001115083694458

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00092911720275879

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'h43qlpl1vm4eqou8b13v8d8cd9609a69'
AND `ip_address` = '::1' 
 Execution Time:0.00070309638977051

SELECT GET_LOCK('1f4a3fdf47e4d53c0a7a9158fc720b01', 300) AS ci_session_lock 
 Execution Time:0.00039196014404297

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'h43qlpl1vm4eqou8b13v8d8cd9609a69'
AND `ip_address` = '::1' 
 Execution Time:0.00092601776123047

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010221004486084

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00075793266296387

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0010251998901367

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00065803527832031

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_suppliersgls'
 LIMIT 1 
 Execution Time:0.00046420097351074

SHOW TABLES FROM `ospos` 
 Execution Time:0.002694845199585

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00053191184997559

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00075197219848633

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00091195106506348

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00075387954711914

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00060606002807617

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00051689147949219

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00073695182800293

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
				WHERE DATE(sl.ledger_time) < '2023-10-07'
				GROUP BY sl.supplier_id, sp.agency_name
			); 
 Execution Time:0.0011529922485352

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
				WHERE DATE(sl.ledger_time) BETWEEN '2023-10-07' AND '2023-10-07' and  sl.supplier_id = 5
				GROUP BY ledger_id, ledger_time
			);

			
			 
 Execution Time:0.0012660026550293

insert into ospos_temp_gl select *from ospos_temp_gl_op; 
 Execution Time:0.00028014183044434

SELECT `ledger_id`, `ledger_time`, `payment_type`, `supplier_name`, `employee_id`, `reference`, `debit_amount`, `credit_amount`, `balance`, `trans_type`, `user`
FROM `ospos_temp_gl`
WHERE `supplier_id` = '5'
ORDER BY `ledger_id` 
 Execution Time:0.0003199577331543

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_suppliers`.`person_id`
WHERE `ospos_suppliers`.`person_id` = '5' 
 Execution Time:0.00041699409484863

SELECT SUM(debit_amount) debit_sum, SUM(credit_amount) credit_sum, case when SUM(ROUND(debit_amount, 2)) > SUM(ROUND(credit_amount, 2)) then SUM(ROUND(debit_amount, 2))-SUM(ROUND(credit_amount, 2)) else 0 end AS debit_amount_balance, case when SUM(ROUND(credit_amount, 2)) > SUM(ROUND(debit_amount, 2)) then SUM(ROUND(credit_amount, 2))-SUM(ROUND(debit_amount, 2)) else 0 end AS credit_amount_balance
FROM `ospos_temp_gl`
WHERE `supplier_id` = '5' 
 Execution Time:0.00038886070251465

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0005340576171875

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00038599967956543

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'h43qlpl1vm4eqou8b13v8d8cd9609a69'
AND `ip_address` = '::1' 
 Execution Time:0.00068998336791992

SELECT GET_LOCK('1f4a3fdf47e4d53c0a7a9158fc720b01', 300) AS ci_session_lock 
 Execution Time:0.00059795379638672

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'h43qlpl1vm4eqou8b13v8d8cd9609a69'
AND `ip_address` = '::1' 
 Execution Time:0.00080704689025879

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00074601173400879

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00058817863464355

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0009160041809082

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00049805641174316

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_suppliersgls'
 LIMIT 1 
 Execution Time:0.00043201446533203

SHOW TABLES FROM `ospos` 
 Execution Time:0.0025458335876465

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00048398971557617

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0005180835723877

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00053596496582031

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0007779598236084

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00051403045654297

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00047111511230469

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00074911117553711

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
				WHERE DATE(sl.ledger_time) < '2023-10-07' and  sl.supplier_id = 5
				GROUP BY sl.supplier_id, sp.agency_name
			); 
 Execution Time:0.0016121864318848

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
				WHERE DATE(sl.ledger_time) BETWEEN '2023-10-07' AND '2023-10-07' and  sl.supplier_id = 5
				GROUP BY ledger_id, ledger_time
			);

			
			 
 Execution Time:0.0010030269622803

insert into ospos_temp_gl select *from ospos_temp_gl_op; 
 Execution Time:0.00039911270141602

SELECT `ledger_id`, `ledger_time`, `payment_type`, `supplier_name`, `employee_id`, `reference`, `debit_amount`, `credit_amount`, `balance`, `trans_type`, `user`
FROM `ospos_temp_gl`
WHERE `supplier_id` = '5'
ORDER BY `ledger_id` 
 Execution Time:0.00074505805969238

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_suppliers`.`person_id`
WHERE `ospos_suppliers`.`person_id` = '5' 
 Execution Time:0.00079202651977539

SELECT SUM(debit_amount) debit_sum, SUM(credit_amount) credit_sum, case when SUM(ROUND(debit_amount, 2)) > SUM(ROUND(credit_amount, 2)) then SUM(ROUND(debit_amount, 2))-SUM(ROUND(credit_amount, 2)) else 0 end AS debit_amount_balance, case when SUM(ROUND(credit_amount, 2)) > SUM(ROUND(debit_amount, 2)) then SUM(ROUND(credit_amount, 2))-SUM(ROUND(debit_amount, 2)) else 0 end AS credit_amount_balance
FROM `ospos_temp_gl`
WHERE `supplier_id` = '5' 
 Execution Time:0.00049614906311035

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0027050971984863

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00098299980163574

