<?php
/**
 * Title: Page — Industry: Construction
 * Slug: cc-modern/page-industry-construction
 * Categories: cc-page-starters
 * Block Types: core/post-content
 * Post Types: page
 * Description: Construction and trades landing page with an illustrated ledger hero, budget-schedule-risk features, plan fit, client stories, FAQ and consultation form.
 * Keywords: construction, contractors, industry, landing page, full page
 * Viewport Width: 1400
 *
 * @package cc-modern
 */

$cc_industry = array(
	'class'    => 'cc-starter-page--construction',
	'hero'     => array(
		'eyebrow' => __( 'Construction Bookkeeping', 'cc-modern' ),
		'title'   => __( 'Run your projects with up-to-date control over budget, schedule, and risk.', 'cc-modern' ),
		'lead'    => __( 'Bookkeeping for contractors and the trades from your personal team of financial experts. Keep your books current, understand your reports and protect your business with organized records. Need detailed job costing? Ask about our add-on service, best supported by actual-basis bookkeeping.', 'cc-modern' ),
		'trust'   => __( 'For general contractors, specialty trades, remodelers and artisans. Most construction clients are up and running in a couple of weeks.', 'cc-modern' ),
		'image'   => 'industry-construction.svg',
		'alt'     => '',
	),
	'trust'    => array(
		__( 'Trusted by contractors and artisans across the U.S.', 'cc-modern' ),
		__( 'U.S.-based team', 'cc-modern' ),
		__( 'A personal team of financial experts on every account', 'cc-modern' ),
		__( 'Works with QuickBooks, Procore, Buildertrend and ADP', 'cc-modern' ),
	),
	'problem'  => array(
		'title'        => __( 'When the books fall behind, you lose control of budget, schedule and risk at the same time.', 'cc-modern' ),
		'p1'           => __( "Budget slips first. Labor, materials and sub invoices land on the wrong job or wait in a pile, so you find out what a project really cost after it's closed. Billing falls behind the work, and nobody can say for sure whether a job is ahead, behind or on track.", 'cc-modern' ),
		'p2'           => __( "Then risk builds quietly. Certified payroll for a prevailing wage job, retainage you're still owed, subs waiting to be paid, records an auditor might ask for. Running crews while managing cash flow, payroll compliance and job costs is no easy feat, and something usually gives.", 'cc-modern' ),
		'callout_lead' => __( 'Complete Controller puts all three back under your control.', 'cc-modern' ),
		'callout_body' => __( 'Your team keeps job costs current, tracks billing against the work, and keeps payroll compliance and payments in order, so you can keep building with confidence.', 'cc-modern' ),
	),
	'features' => array(
		'title'   => __( 'Control over every part of the job.', 'cc-modern' ),
		'pillars' => array( __( 'Budget', 'cc-modern' ), __( 'Schedule', 'cc-modern' ), __( 'Risk', 'cc-modern' ) ),
		'items'   => array(
			array(
				'tag'   => __( 'Budget', 'cc-modern' ),
				'icon'  => 'house',
				'title' => __( 'Job costing as an add-on', 'cc-modern' ),
				'copy'  => __( 'Add detailed tracking of labor, materials, subs and overhead by project. Job costing is an add-on service, best supported by actual-basis bookkeeping.', 'cc-modern' ),
			),
			array(
				'tag'   => __( 'Budget', 'cc-modern' ),
				'icon'  => 'cash',
				'title' => __( 'Clear income and expense reports', 'cc-modern' ),
				'copy'  => __( 'Current income and expense reports help you understand spending and plan conversations about payroll, purchases and cash needs.', 'cc-modern' ),
			),
			array(
				'tag'   => __( 'Schedule', 'cc-modern' ),
				'icon'  => 'chart',
				'title' => __( 'WIP schedules with over and under billing', 'cc-modern' ),
				'copy'  => __( 'Work-in-progress schedules that show whether each job is ahead, behind or right on track with its billing.', 'cc-modern' ),
			),
			array(
				'tag'   => __( 'Schedule', 'cc-modern' ),
				'icon'  => 'sheet',
				'title' => __( 'Billing that keeps pace with the work', 'cc-modern' ),
				'copy'  => __( 'Proactive cost and profit visibility on every job, so billing and costs stay matched to how far along the work really is.', 'cc-modern' ),
			),
			array(
				'tag'   => __( 'Risk', 'cc-modern' ),
				'icon'  => 'file',
				'title' => __( 'Certified payroll and prevailing wage', 'cc-modern' ),
				'copy'  => __( 'Certified payroll reports generated and prevailing wage requirements managed, with records kept audit-ready.', 'cc-modern' ),
			),
			array(
				'tag'   => __( 'Risk', 'cc-modern' ),
				'icon'  => 'lock',
				'title' => __( 'Retainage and subcontractor payments', 'cc-modern' ),
				'copy'  => __( 'Retainage accounted for and subs paid on time, so no costs slip through the cracks. Your data is encrypted and stored securely in the cloud.', 'cc-modern' ),
			),
		),
	),
	'team'     => array(
		'title'            => __( 'Your personal team of financial experts, built for contractors.', 'cc-modern' ),
		'statement_before' => __( 'Budget, schedule and risk, kept under control by ', 'cc-modern' ),
		'statement_accent' => __( 'your team.', 'cc-modern' ),
		'intro'            => __( 'Every Complete Controller account comes with a Controller who oversees your numbers, a Bookkeeper who keeps them current, and CAS-i, our AI, so you can check on any job between conversations.', 'cc-modern' ),
		'tiles'            => array(
			array(
				'label' => __( 'Your Controller', 'cc-modern' ),
				'title' => __( 'Reviews the numbers and plans ahead with you.', 'cc-modern' ),
				'body'  => __( 'Reviews job costs and WIP schedules, flags jobs drifting over budget or behind on billing, keeps records audit-ready and plans ahead with you.', 'cc-modern' ),
			),
			array(
				'label' => __( 'Your Bookkeeper', 'cc-modern' ),
				'title' => __( 'Keeps your books current.', 'cc-modern' ),
				'body'  => __( 'Codes costs to the right job, keeps billing, retainage and sub payments current, and reconciles your accounts in QuickBooks, Procore, Buildertrend and ADP.', 'cc-modern' ),
			),
			array(
				'label' => __( 'CAS-i, Your AI', 'cc-modern' ),
				'title' => __( 'Numbers that make sense, any time you ask.', 'cc-modern' ),
				'body'  => __( 'Ask questions about job costs, billing or cash flow in plain language and get clear answers that help you decide what to do next. CAS-i explains your numbers and never changes your books.', 'cc-modern' ),
			),
		),
	),
	'steps'    => array(
		array(
			'title' => __( 'Book a free consultation', 'cc-modern' ),
			'copy'  => __( "Tell us about your jobs, crews and current setup. We'll recommend the right level of support and give you a clear price.", 'cc-modern' ),
		),
		array(
			'title' => __( 'We set up your controls', 'cc-modern' ),
			'copy'  => __( 'We get your books and existing tools in order. If you choose the job-costing add-on, we scope it to your trade and reporting needs. Most construction clients are up and running in a couple of weeks.', 'cc-modern' ),
		),
		array(
			'title' => __( 'Stay in control every month', 'cc-modern' ),
			'copy'  => __( 'Your Bookkeeper keeps everything current, your Controller sends reports on budget, billing and compliance for every job, and CAS-i answers questions in between.', 'cc-modern' ),
		),
	),
	'asks'     => array(
		__( 'Which jobs are over budget this month?', 'cc-modern' ),
		__( 'What did we spend on materials last month?', 'cc-modern' ),
		__( 'How much retainage are we still owed?', 'cc-modern' ),
	),
	'plans'    => array(
		'title' => __( 'Three levels for contractors.', 'cc-modern' ),
		'intro' => __( 'The right level depends on how many jobs you run at once and how often you need your numbers updated. Most busy contractors choose Complete.', 'cc-modern' ),
		'items' => array(
			array(
				'tag'      => __( 'Steady small contractors', 'cc-modern' ),
				'name'     => __( 'Basic', 'cc-modern' ),
				'price'    => '$405',
				'period'   => ' / month',
				'setup'    => __( 'One-time setup: $1,450', 'cc-modern' ),
				'fit'      => __( 'contractors who need monthly bookkeeping and a full report package to understand income, expenses and account balances. Detailed job costing is available as an add-on.', 'cc-modern' ),
				'features' => array( __( 'Monthly bookkeeping', 'cc-modern' ), __( 'Full report package', 'cc-modern' ), __( 'Your Controller, Bookkeeper and CAS-i', 'cc-modern' ) ),
			),
			array(
				'tag'      => __( 'Busy job loads', 'cc-modern' ),
				'name'     => __( 'Complete', 'cc-modern' ),
				'price'    => '$970',
				'period'   => ' / month',
				'setup'    => __( 'One-time setup: $1,650', 'cc-modern' ),
				'fit'      => __( 'contractors who need weekly bookkeeping, custom reports and audit-ready records. Ask about actual-basis bookkeeping and the job-costing add-on for project-level reporting.', 'cc-modern' ),
				'features' => array( __( 'Weekly bookkeeping', 'cc-modern' ), __( 'Custom report package', 'cc-modern' ), __( 'Audit ready', 'cc-modern' ), __( 'Your Controller, Bookkeeper and CAS-i', 'cc-modern' ) ),
				'pick'     => true,
			),
			array(
				'tag'      => __( 'High-volume contractors', 'cc-modern' ),
				'name'     => __( 'Premier', 'cc-modern' ),
				'price'    => '$1,835',
				'period'   => ' / month',
				'setup'    => __( 'One-time setup: $1,850', 'cc-modern' ),
				'fit'      => __( 'high-volume contractors who want their numbers updated every day and their CPA working alongside the team.', 'cc-modern' ),
				'features' => array( __( 'Daily bookkeeping', 'cc-modern' ), __( 'Custom report package', 'cc-modern' ), __( 'CPA collaboration', 'cc-modern' ), __( 'Your Controller, Bookkeeper and CAS-i', 'cc-modern' ) ),
			),
		),
		'note'  => __( 'Each plan has a one-time setup fee to get your books ready. Have an in-house bookkeeper you want to keep? Ask about our Oversight and Training services.', 'cc-modern' ),
	),
	'quotes'   => array(
		'title'    => __( 'What Contractors Say', 'cc-modern' ),
		'featured' => true,
		'items'    => array(
			array(
				'text' => __( 'Complete Controller has been a huge support to our in-house accounting team. They did a great job supporting our construction business with special reports and monthly reconciliations. We appreciate everything you do!', 'cc-modern' ),
				'name' => 'Chuck Hoffman',
				'role' => 'Hoffman Finn Development',
			),
			array(
				'text' => __( 'My Complete Controller bookkeeper has done an excellent job with my accounting.', 'cc-modern' ),
				'name' => 'Lyndon Brown',
				'role' => 'Alpha Omega Construction',
			),
			array(
				'text' => __( 'Complete Controller has been fantastic, we have loved working with you the past 5 years!', 'cc-modern' ),
				'name' => 'Laura Douglas',
				'role' => 'Turner Group Inc.',
			),
			array(
				'text' => __( 'Thank you, and all the staff at Complete Controller, for your services over the years. You were an important part of helping us to grow our business.', 'cc-modern' ),
				'name' => 'A & O Constructors Inc.',
				'role' => '',
			),
		),
	),
	'faq'      => array(
		'title' => __( 'What contractors ask before they switch.', 'cc-modern' ),
		'items' => array(
			array(
				'q' => __( 'Can you track profitability by job or project?', 'cc-modern' ),
				'a' => __( 'Yes. Detailed job costing is available as an add-on, best supported by actual-basis bookkeeping. We scope labor, materials, subs and overhead tracking to your projects and quote it separately from base bookkeeping.', 'cc-modern' ),
			),
			array(
				'q' => __( 'How do you help with work-in-progress (WIP) reporting?', 'cc-modern' ),
				'a' => __( 'We create WIP schedules that track over and under billing, so you can see whether each job is ahead, behind or right on track.', 'cc-modern' ),
			),
			array(
				'q' => __( 'Do you handle certified payroll and prevailing wage compliance?', 'cc-modern' ),
				'a' => __( 'Yes. We generate certified payroll reports, manage prevailing wage requirements and keep your records audit-ready.', 'cc-modern' ),
			),
			array(
				'q' => __( 'Can you keep track of retainage and subcontractor payments?', 'cc-modern' ),
				'a' => __( 'Yes. We make sure retainage is accounted for, subs are paid on time and no costs slip through the cracks.', 'cc-modern' ),
			),
			array(
				'q' => __( 'Do you offer reports that help me manage cash flow?', 'cc-modern' ),
				'a' => __( 'Yes. Your income and expense reports give you current financial information to discuss with your Controller when planning cash needs.', 'cc-modern' ),
			),
			array(
				'q' => __( 'What if I already use Procore, Buildertrend or QuickBooks?', 'cc-modern' ),
				'a' => __( 'That works. We work with all three, plus ADP, so your financial data stays in step with the systems you already use.', 'cc-modern' ),
			),
			array(
				'q' => __( 'Can I keep my in-house bookkeeper and just use oversight?', 'cc-modern' ),
				'a' => __( 'Yes. Many construction companies use our Oversight and Training services. We review your QuickBooks, catch errors and give you year-end clarity.', 'cc-modern' ),
			),
			array(
				'q' => __( 'How much does construction bookkeeping cost, and how fast can we start?', 'cc-modern' ),
				'a' => __( 'Most contractors fit Basic at $405 a month or Complete at $970 a month, plus a one-time setup fee. Most construction clients are up and running in a couple of weeks.', 'cc-modern' ),
			),
		),
	),
);

echo cc_modern_render_industry_page( $cc_industry ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
unset( $cc_industry );
