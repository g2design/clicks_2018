<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php $baseUrl = "/clicks_2018/" ?>

	<base href="<?php echo $baseUrl; ?>">

	<?php if (isset($title)): ?>
		<title><?php echo $title; ?></title>
	<?php else: ?>
		<title>Clicks 2017</title>
	<?php endif ?>
	
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/style.min.css">
	<!-- <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-2121676-9', 'auto');
        ga('send', 'pageview');

    </script> -->
</head>
<body>
	<div class="loader"></div>
	<header>
		<div class="top-header">
			<div class="light-blue-bg">
				<div class="container">
					<div class="row">
						<div class="col-12 top-links d-flex justify-content-end align-items-center">
							<ul>
								<li>
									<img src="assets/img/header/downloads.png" alt="Downloads">
									<span class="blue">Downloads</span>
								</li>
								<li>
									<img src="assets/img/header/page.png" alt="Shareholder Information">
									<span class="blue">Shareholder Information</span>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="container small-content-padding">
				<div class="row">
					<div class="col-4 col-lg-6 d-flex align-items-center">
						<a class="d-flex align-items-center" href="<?php echo $baseUrl; ?>">
							<img class="logo" src="assets/img/header/Clicks_Logo.png" alt="Logo">
						</a>
					</div>
					<div class="col-8 col-lg-6 search justify-content-between d-flex align-items-end flex-column">
						<form action="search" class="margin-bottom-20px">
							<input type="text" name="zoom_query" placeholder="Search site...">
							<input class="submit" type="submit" value="Search">
						</form>
						<h3 class="dark-blue text-uppercase">Integrated Annual Report <b>2018</b></h3>
					</div>
				</div>
			</div>
		</div>

		<div class="main-nav light-blue-bg">
			<div class="container d-flex justify-content-center">
				<div class="row d-flex justify-content-center">
					<div class="col-12">
						<nav class="d-flex">
							<a class="sky-blue-bg home d-flex align-items-center" href="<?php echo $baseUrl; ?>">
								<img src="assets/img/header/Clicks_home.png" alt="Home">
							</a>
							<ul class="d-flex align-items-center text-center max-width-100">
								<li class="menu-item d-flex align-items-center justify-content-center">
									<span class="navbar-item">Group Overview <br>and Strategy</span>
									<div class="dropdown text-left">
										<ul>
											<li><a href="pages/group_overview/introduction_report">Introducing the report</a></li>
											<li><a href="pages/group_overview/group_profile">Group profile</a></li>
											<li><a href="pages/group_overview/group_strategy">Group strategy</a></li>
											<li><a href="pages/group_overview/business_model">Clicks' value-creating business model</a></li>
											<li><a href="pages/group_overview/stakeholder_engagement">Stakeholder engagement</a></li>
											<li><a href="pages/group_overview/material_issues">Managing material issues</a></li>
											<li><a href="pages/group_overview/investment_case">Investment case</a></li>
										</ul>
									</div>
								</li>
								<li class="menu-item d-flex align-items-center justify-content-center">
									<span class="navbar-item">Leadership</span>
									<div class="dropdown text-left">
										<ul>
											<li><a href="pages/leadership/chairman_report">Chairman's report</a></li>
											<li><a href="pages/leadership/ceo_report">Chief executive's report</a></li>
											<li><a href="pages/leadership/cfo_report">Chief financial officer's report</a></li>
										</ul>
									</div>
								</li>
								<li class="menu-item d-flex align-items-center justify-content-center">
									<span class="navbar-item">Financial Performance</span>
									<div class="dropdown text-left">
										<ul>
											<li><a href="pages/financial_performance/cfo_report">Chief financial officer's report</a></li>
											<li><a href="pages/financial_performance/5_year_review">Five-year performance review</a></li>
										</ul>
									</div>
								</li>
								<li class="menu-item d-flex align-items-center justify-content-center">
									<span class="navbar-item">Operational Performance</span>
									<div class="dropdown text-left">
										<ul>
											<li><a href="pages/performance/review_clicks">Clicks operational review</a></li>
											<li><a href="pages/performance/review_upd">UPD operational review</a></li>
										</ul>
									</div>
								</li>
								<li class="menu-item d-flex align-items-center justify-content-center">
									<span class="navbar-item">Governance</span>
									<div class="dropdown text-left">
										<ul>
											<li><a href="pages/governance/bod">Board of directors</a></li>
											<li><a href="pages/governance/create_value_governance">Creating value through good governance</a></li>
											<li><a href="pages/governance/create_value_citizenship">Creating value through good citizenship</a></li>
											<li><a href="pages/governance/rewarding_value">Rewarding value creation</a></li>
											<li><a href="pages/governance/shareholder_analysis">Shareholder analysis</a></li>
											<li><a href="pages/governance/shareholder_diary">Shareholders' diary</a></li>
											<li><a href="pages/governance/corporate_info">Corporate Information</a></li>
										</ul>
									</div>
								</li>
								<li class="menu-item d-flex align-items-center justify-content-center">
									<a class="navbar-item d-flex align-items-center" href="pages/financial_statements/financial_statements">Summary audited <br>financial statements</a>
									<div class="dropdown text-left">
										<ul>
											<li><h5 class="dark-blue remove-bottom-margin">AUDITED ANNUAL FINANCIAL STATEMENTS 2017</h5></li>
											<li><a href="assets/pdfs/1_Directors_responsibility_statement.pdf" target="_blank">Directors' responsibility statement</a></li>
											<li><a href="assets/pdfs/2_Certificate_by_the_company_secretary.pdf" target="_blank">Certificate by the company secretary</a></li>
											<li><a href="assets/pdfs/3_Directors_report.pdf" target="_blank">Directors' report</a></li>
											<li><a href="assets/pdfs/4_Audit_and_risk_committee_report.pdf" target="_blank">Audit and risk committee report</a></li>
											<li><a href="assets/pdfs/5_Independent_Auditors_report.pdf" target="_blank">Independent auditor's report</a></li>
											<li><a href="assets/pdfs/6_Consolidated_statement_of_comprehensive_income.pdf" target="_blank">Consolidated statement of comprehensive income</a></li>
											<li><a href="assets/pdfs/7_Consolidated_statement_of_financial_position.pdf" target="_blank">Consolidated statement of financial position</a></li>
											<li><a href="assets/pdfs/8_Consolidated_statement_of_changes_in_equity.pdf" target="_blank">Consolidated statement of changes in equity</a></li>
											<li><a href="assets/pdfs/9_Consolidated_statement_of_cash_flows.pdf" target="_blank">Consolidated statement of cash flows</a></li>
											<li><a href="assets/pdfs/10_Notes_to_the_consolidated_statement_of_cash_flows.pdf" target="_blank">Notes to the consolidated statement of cash flows</a></li>
											<li><a href="assets/pdfs/11_Segmental_analysis.pdf" target="_blank">Segmental analysis</a></li>
											<li><a href="assets/pdfs/12_Accounting_policies.pdf" target="_blank">Accounting policies</a></li>
											<li><a href="assets/pdfs/13_Notes_to_the_annual_financial_statements.pdf" target="_blank">Notes to the annual financial statements</a></li>
											<li><a href="assets/pdfs/14_Company_statement_of_comprehensive_income.pdf" target="_blank">Company statement of comprehensive income</a></li>
											<li><a href="assets/pdfs/15_Company_statement_of_financial_position.pdf" target="_blank">Company statement of financial position</a></li>
											<li><a href="assets/pdfs/16_Company_statement_of_changes_in_equity.pdf" target="_blank">Company statement of changes in equity</a></li>
											<li><a href="assets/pdfs/17_Company_statement_of_cash_flows.pdf" target="_blank">Company statement of cash flows</a></li>
											<li><a href="assets/pdfs/19_Interest_in_subsidiary_companies.pdf" target="_blank">Interest in subsidiary companies</a></li>
											<li class="margin-bottom-10px"><a href="assets/pdfs/20_Analysis_of_shareholders.pdf" target="_blank">Analysis of shareholders</a></li>
											<li class="blue">These are the audited annual financial statements of the group and the company for the year ended 31&nbsp;August&nbsp;2017. They have been prepared under the supervision of the chief financial officer, M Fleming CA (SA). </li>
										</ul>
									</div>
								</li>
								<li class="menu-item d-flex align-items-center justify-content-center">
									<a class="navbar-item d-flex align-items-center" href="pages/onlinereports/onlinereports">Online reports</a>
									<div class="dropdown text-left">
										<ul>
											<li class="margin-bottom-10px"><a href="assets/pdfs/Clicks_IAR_2017.pdf" target="_blank">Integrated Annual Report 2017</a></li>
											<li><b class="dark-blue">Financial reporting</b></li>
											<li><a href="assets/pdfs/Clicks_AFS_2017_online.pdf" target="_blank">Annual financial statements 2017</a></li>
											<li><a href="assets/pdfs/Clicks_Five_Year_2017_online.pdf" target="_blank">Five-year financial review</a></li>
											<li><a href="assets/pdfs/Clicks_Analyst_Oct2017_screen.pdf" target="_blank">Annual results 2017</a></li>
											<li class="margin-bottom-10px"><a href="assets/pdfs/Clicks_Group_Annual_Results_2017_Analyst_Presentation_FINAL.pdf" target="_blank">Annual results 2017 presentation</a></li>
											<li><b class="dark-blue">Governance</b></li>
											<li class="margin-bottom-10px"><a href="assets/pdfs/Clicks_CorpGov_2017_online.pdf" target="_blank">Corporate governance report 2017 (incorporating King lV)</a></li>
											<li><b class="dark-blue">Annual general meeting</b></li>
											<li><a href="assets/pdfs/Clicks_AGM_2017_online.pdf" target="_blank">Notice to shareholders</a></li>
											<li class="margin-bottom-10px"><a href="assets/pdfs/Clicks_Form_of_Proxy_2017_online.pdf" target="_blank">Form of proxy</a></li>
											<li><b class="dark-blue">Sustainability</b></li>
											<li><a href="assets/pdfs/Clicks_Social&EthicsReport_2017_online.pdf" target="_blank">Social and ethics committee report 2017</a></li>
											<li><a href="assets/pdfs/Sustainability_report_2017.pdf" target="_blank">Sustainability report 2017</a></li>
											<li><a href="assets/pdfs/Clicks_SusIndicatorsReport_2017_online.pdf" target="_blank">Five-year sustainability review</a></li>
										</ul>
									</div>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</header>
	<div class="not-supported d-flex align-items-center justify-content-center flex-column">
		 <div class="container">
		 	<div class="row">
		 		<div class="col-12 text-center">
		 			<img class="logo margin-bottom-20px" src="assets/img/header/Clicks_Logo.png" alt="Logo" style="width: 300px">
					<h3 class="dark-blue">Some things in life are better viewed on a big screen. Please open this report on a tablet in landscape mode or a bigger screen.</h3>
		 		</div>
		 	</div>
		 </div>
	</div>
	<div class="side-buttons" style=""> 
		<a href="<?php echo $baseUrl; ?>">
			<img src="assets/img/home.png" alt="">
		</a>
		<a href="<?php echo $baseUrl; ?>pages/onlinereports/onlinereports">
			<img src="assets/img/downloads.png" alt="">
		</a>
		<a id="to-top" href="">
			<img src="assets/img/top.png" alt="">
		</a>
		<a href="<?php echo $baseUrl; ?>search" class="search">
			<img src="assets/img/search.png" alt="">
		</a>
	</div>
	<div class="top-element"></div>