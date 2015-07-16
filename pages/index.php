<?php require 'widget.class.php'; $widget = new Widget(); ?><!DOCTYPE html>
<!--[if IE 8]><html class="ie ie8" prefix="og: http://ogp.me/ns#"><![endif]-->
<!--[if IE 9]><html class="ie ie9" prefix="og: http://ogp.me/ns#"><![endif]-->
<!--[if !IE]> --><html prefix="og: http://ogp.me/ns#"><!-- <![endif]-->
<head lang="en">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <link rel="stylesheet" href="/static/css/bootstrap.css">
    <link rel="stylesheet" href="/static/library/jQueryUI/jquery-ui-1.11.4-structure.css">
    <link rel="stylesheet" href="/static/library/jQueryUI/jquery-ui-1.11.4-theme.css">

    <!--[if IE]>
    <link rel="stylesheet" href="/static/css/bootstrap-ie.css">
    <![endif]-->

    <?php
        echo $widget->css();
    ?>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div class="site-wrapper">
    <div class="site-canvas">
        <!-- header starts here -->
        <header class="masthead" id="masthead">
            <nav class="navbar navbar-inverse" role="navigation">
                <div class="utility-section-wrapper blue">
                    <div class="utility-section">
                        <!-- Logo -->
                        <div class="navbar-brand">
                            <a href="/">
                                <img src="/images/shared/logo.png">
                            </a>
                        </div>

                        <div id="masthead-search" class="search-container">
                            <form id="search-form">
                                <input id="searchterm" type="text" class="search-query form-control" placeholder="What can we help you find?"/>
                                <button type="submit" class="btn" onclick="goAllSearch3()">
                                    <span class="hidden-xs">Search</span>
                                    <i class="icon-small-searchleft visible-xs"></i>
                                </button>
                                <div class="autocomplete"></div>
                            </form>
                        </div>

                        <!-- Links -->
                        <ul class="utility">
                            <li id="mobile-search-button" class="dropdown visible-xs mobile-search-button">
                                <a href="#">
                                    <i class="icon-small-searchleft"></i>
                                </a>
                            </li>
                            <li id="signin-container" class="dropdown">
                                <a id="signin-link" data-target="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-small-useraccount"></i>
                                    <span class="hidden-xs hidden-sm" id="sign-in"><span id="signin-button">Sign In</span></span>
                                </a>

                                <div role="menu" aria-labelledby="signin-link" class="dropdown-menu">
                                    <div class="col-xs-12">
                                        <h5 class="text-gray-dark not-logged-in">Dell Software Sign In</h5>

                                        <div class="row">
                                            <div class="col-xs-12 not-logged-in">
                                                <button role="button" class="btn btn-primary btn-block bottom-offset-mini top-offset-small lnk-sign-in">Sign In</button>
                                            </div>
                                            <div class="col-xs-12 is-logged-in">
                                                <button id="lnkMyAccount" role="button" class="btn btn-primary btn-block bottom-offset-mini top-offset-small">My Account</button>
                                            </div>
                                            <div class="col-xs-12 is-logged-in">
                                                <button id="lnkmainloggOut" role="button" class="btn btn-default btn-block bottom-offset-mini top-offset-small">Sign Out</button>
                                            </div>
                                            <div class="col-xs-12 not-logged-in">
                                                <button role="button" class="btn btn-block btn-default lnk-create-account">Create an account</button>
                                            </div>
                                        </div>
                                        <hr>
                                        <h5 class="flyout-signin">
                                            <a href="/partners/">PartnerDirect Sign In</a>
                                        </h5>
                                    </div>
                                </div>
                            </li>
                            <li class="visible-xs">
                                <a href="#" class="navbar-toggle" data-toggle="site-menu">
                                    <i class="icon-ui-menucollapsed"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div>
                    <div class="masthead-shadow-section"></div>

                    <div class="main-nav-section">
                        <div class="shadow-overlay-left"></div>
                        <ul class="tier1">
                            <li class="subLinks">
                                <a href="#">
                                    <span>Products</span>
                                    <i class="menu-indicator pull-right"></i>
                                </a>
                                <ul class="tier2">
                                    <li class="subLinks">
                                        <a href="/solutions/cloud-management/">
                                            <span>Cloud Management</span>
                                            <i class="menu-indicator pull-right"></i>
                                        </a>
                                        <ul class="tier3">
                                            <li>
                                                <a
                                                    href="http://www.dell.com/Learn/us/en/555/large-business/solution-converged-infrastructure-asim?c=us&l=en&s=biz"
                                                    target="_blank">Active System Manager</a>
                                            </li>
                                            <li>
                                                <a href="/products/cloud-manager/">Cloud Manager</a>
                                            </li>
                                            <li>
                                                <a href="/products/foglight-application-performance-monitoring-saas-edition/">Foglight
                                                    Application Performance Monitoring SaaS Edition</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="subLinks">
                                        <a href="/solutions/data-protection/">
                                            <span>Data Protection</span>
                                            <i class="menu-indicator pull-right"></i>
                                        </a>
                                        <ul class="tier3">
                                            <li class="subLinks">
                                                <a href="#">
                                                    <span>Application-Specific Data Protection</span>
                                                    <i class="menu-indicator pull-right"></i>
                                                </a>
                                                <ul class="tier4">
                                                    <li><a href="/products/appassure/">AppAssure Backup and Recovery</a>
                                                    </li>
                                                    <li><a href="/products/archive-manager/">Archive Manager</a></li>
                                                    <li><a href="/products/change-auditor-for-active-directory/">Change
                                                            Auditor for Active Directory</a></li>
                                                    <li><a href="/products/change-auditor-for-exchange/">Change Auditor for
                                                            Exchange</a></li>
                                                    <li><a href="/products/change-auditor-for-sharepoint/">Change Auditor
                                                            for SharePoint</a></li>
                                                    <li><a href="/products/change-auditor-for-sql-server/">Change Auditor
                                                            for SQL Server</a></li>
                                                    <li><a href="/products/ems-email-archive-and-ediscovery/">EMS Email
                                                            Archive and eDiscovery</a></li>
                                                    <li><a href="/products/ems-email-continuity/">EMS Email Continuity</a>
                                                    </li>
                                                    <li><a href="/products/litespeed-for-sql-server/">LiteSpeed for SQL
                                                            Server</a></li>
                                                    <li><a href="/products/migration-manager-for-active-directory/">Migration
                                                            Manager for Active Directory</a></li>
                                                    <li><a href="/products/migration-manager-for-exchange/">Migration
                                                            Manager for Exchange</a></li>
                                                    <li><a href="/products/migration-manager-for-sharepoint/">Migration
                                                            Manager for SharePoint</a></li>
                                                    <li><a href="/products/netvault-backup/">Netvault Backup</a></li>
                                                    <li><a href="/products/recovery-manager-for-active-directory/">Recovery
                                                            Manager for Active Directory</a></li>
                                                    <li><a href="/products/recovery-manager-for-exchange/">Recovery Manager
                                                            for Exchange</a></li>
                                                    <li><a href="/products/recovery-manager-for-sharepoint/">Recovery
                                                            Manager for SharePoint</a></li>
                                                    <li><a href="/products/shareplex/">SharePlex</a></li>
                                                </ul>
                                            </li>
                                            <li class="subLinks">
                                                <a href="/solutions/backup-and-recovery/">
                                                    <span>Backup &amp; Recovery</span>
                                                    <i class="menu-indicator pull-right"></i>
                                                </a>
                                                <ul class="tier4">
                                                    <li><a href="/products/appassure/">AppAssure Backup and Recovery</a>
                                                    </li>
                                                    <li><a href="/products/appassure-dl1000-backup-and-recovery-appliance/">DL1000
                                                            Backup and Recovery Appliance</a></li>
                                                    <li><a href="/products/appassure-dl4000-backup-and-recovery-appliance/">DL4000
                                                            Backup and Recovery Appliance</a></li>
                                                    <li><a href="/products/ems-email-continuity/">EMS Email Continuity</a>
                                                    </li>
                                                    <li><a href="/products/netvault-backup/">Netvault Backup</a></li>
                                                    <li><a href="/products/vranger/">vRanger</a></li>
                                                </ul>
                                            </li>
                                            <li class="subLinks">
                                                <a href="/solutions/deduplication-appliances/">
                                                    <span>Deduplication Appliances</span>
                                                    <i class="menu-indicator pull-right"></i>
                                                </a>
                                                <ul class="tier4">
                                                    <li><a href="/products/dr2000v-virtual-backup-appliance/">DR2000v Backup
                                                            Disk Virtual Appliance</a></li>
                                                    <li><a href="/products/dr4100-disk-backup-appliance/">DR4100 Disk Backup
                                                            Appliance</a></li>
                                                    <li><a href="/products/dr6000-disk-backup-appliance/">DR6000 Disk Backup
                                                            Appliance</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="subLinks">
                                        <a href="/solutions/endpoint-management/">
                                            <span>Endpoint Management</span>
                                            <i class="menu-indicator pull-right"></i>
                                        </a>
                                        <ul class="tier3">
                                            <li>
                                                <a href="/products/changebase/" target="_blank">ChangeBASE</a>
                                            </li>
                                            <li>
                                                <a href="/products/desktop-authority-management-suite/">Desktop
                                                    Authority Management Suite</a>
                                            </li>
                                            <li>
                                                <a href="/kace/">KACE Product Line</a>
                                            </li>
                                            <li>
                                                <a href="/products/remotescan-enterprise/">RemoteScan Enterprise</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="subLinks">
                                        <a href="/solutions/information-management/">
                                            <span>Information Management</span>
                                            <i class="menu-indicator pull-right"></i>
                                        </a>
                                        <ul class="tier3">
                                            <li class="subLinks">
                                                <a href="/solutions/application-and-data-integration/">
                                                    <span>Application and Data Integration</span>
                                                    <i class="menu-indicator pull-right"></i>
                                                </a>
                                                <ul class="tier4">
                                                    <li><a href="/products/boomi-atomsphere/">Boomi AtomSphere</a></li>
                                                    <li><a href="/products/boomi-mdm/">Boomi MDM</a></li>
                                                    <li><a href="/products/shareplex/">SharePlex</a></li>
                                                </ul>
                                            </li>
                                            <li class="subLinks">
                                                <a href="/solutions/big-data-analytics/">
                                                    <span>Big Data Analytics</span>
                                                    <i class="menu-indicator pull-right"></i>
                                                </a>
                                                <ul class="tier4">
                                                    <li><a href="/products/boomi-atomsphere/">Boomi AtomSphere</a></li>
                                                    <li><a href="/products/statistica/">Statistica</a></li>
                                                </ul>
                                            </li>
                                            <li class="subLinks">
                                                <a href="/solutions/business-intelligence/">
                                                    <span>Business Intelligence</span>
                                                    <i class="menu-indicator pull-right"></i>
                                                </a>
                                                <ul class="tier4">
                                                    <li><a href="/products/boomi-atomsphere/">Boomi AtomSphere</a></li>
                                                    <li><a href="/products/statistica/">Statistica</a></li>
                                                    <li><a href="/products/toad-data-point/">Toad Data Point</a></li>
                                                </ul>
                                            </li>
                                            <li class="subLinks">
                                                <a href="/solutions/database-development-and-management/">
                                                    <span>Database Development &amp; Management</span>
                                                    <i class="menu-indicator pull-right"></i>
                                                </a>
                                                <ul class="tier4">
                                                    <li><a href="/products/stat-oracle-e-business-suite//">Stat for Oracle
                                                            E-Business Suite</a></li>
                                                    <li><a href="/products/toad-development-suite-for-oracle/">Toad
                                                            Development Suite for Oracle</a></li>
                                                    <li><a href="/products/toad-extension-for-eclipse/">Toad Extension for
                                                            Eclipse</a></li>
                                                    <li><a href="/products/toad-for-cloud-databases/">Toad for Cloud
                                                            Databases</a></li>
                                                    <li><a href="/products/toad-dba-suite-for-db2/">Toad DBA Suite for IBM
                                                            DB2 LUW</a></li>
                                                    <li><a href="/products/toad-dba-suite-for-oracle/">Toad DBA Suite for
                                                            Oracle</a></li>
                                                    <li><a href="/products/toad-for-db2/">Toad for IBM DB2 LUW</a></li>
                                                    <li><a href="/products/toad-for-db2-zos/">Toad for IBM DB2 z/OS</a></li>
                                                    <li><a href="/products/toad-for-sql-server/">Toad for SQL Server</a>
                                                    </li>
                                                    <li><a href="/products/toad-for-sybase/">Toad for Sybase</a></li>
                                                    <li><a href="/products/toad-for-oracle/">Toad for Oracle</a></li>
                                                    <li><a href="/products/foglight-for-cross-platform-databases/">Foglight
                                                            for Cross-Platform Databases</a></li>
                                                    <li><a href="/products/spotlight-on-sql-server-enterprise/">Spotlight on
                                                            SQL Server Enterprise</a></li>
                                                </ul>
                                            </li>
                                            <li class="subLinks">
                                                <a href="/solutions/database-replication-and-backup/">
                                                    <span>Database Replication &amp; Backup</span>
                                                    <i class="menu-indicator pull-right"></i>
                                                </a>
                                                <ul class="tier4">
                                                    <li><a href="/products/litespeed-for-sql-server/">LiteSpeed for SQL
                                                            Server</a></li>
                                                    <li><a href="/products/shareplex/">SharePlex</a></li>
                                                    <li><a href="/products/shareplex-connector-for-hadoop/">SharePlex
                                                            Connector for Hadoop</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="subLinks">
                                        <a href="/solutions/mobile-workforce-management/">
                                            <span>Mobile Workforce Management</span>
                                            <i class="menu-indicator pull-right"></i>
                                        </a>
                                        <ul class="tier3">
                                            <li class="subLinks">
                                                <a href="/solutions/desktop-virtualization/">
                                                    <span>Desktop Virtualization</span>
                                                    <i class="menu-indicator pull-right"></i>
                                                </a>
                                                <ul class="tier4">
                                                    <li><a href="/products/remotescan-enterprise/">RemoteScan</a></li>
                                                </ul>
                                            </li>
                                            <li class="subLinks">
                                                <a href="/solutions/endpoint-security/">
                                                    <span>Endpoint Security</span>
                                                    <i class="menu-indicator pull-right"></i>
                                                </a>
                                                <ul class="tier4">
                                                    <li><a href="/products/sonicwall-anti-spam-desktop/">Anti-Spam
                                                            Desktop</a></li>
                                                    <li><a href="/products/sonicwall-enforced-anti-virus/">Enforced
                                                            Anti-Virus and Anti-Spyware</a></li>
                                                    <li>
                                                        <a href="/kace/">KACE Product Line</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="subLinks">
                                                <a href="/solutions/enterprise-mobility-management/">
                                                    <span>Enterprise Mobility Management</span>
                                                    <i class="menu-indicator pull-right"></i>
                                                </a>
                                                <ul class="tier4">
                                                    <li><a href="/products/desktop-workspace/">Desktop Workspace</a></li>
                                                    <li><a href="/products/K1000-as-a-service/">K1000 as a Service</a></li>
                                                    <li><a href="/products/mobile-workspace/">Mobile Workspace</a></li>
                                                    <li><a href="/products/mobile-management/">Mobile Management</a></li>
                                                </ul>
                                            </li>
                                            <li class="subLinks">
                                                <a href="/solutions/network-security/">
                                                    <span>Network Security</span>
                                                    <i class="menu-indicator pull-right"></i>
                                                </a>
                                                <ul class="tier4">
                                                    <li><a href="/products/sonicwall-analyzer/">Analyzer</a></li>
                                                    <li><a href="/products/sonicpoint-wireless-access-point-series/">Wireless
                                                            Access Point Series</a></li>
                                                    <li><a href="/products/sonicwall-e-class-nsa/">E-Class NSA Series</a>
                                                    </li>
                                                    <li><a href="/products/sonicwall-gms/">Global Management System</a></li>
                                                    <li><a href="/products/sonicwall-nsa/">NSA Series</a></li>
                                                    <li><a href="/products/sonicwall-scrutinizer/">Scrutinizer</a></li>
                                                    <li><a href="/products/sonicwall-supermassive-e10000/">SuperMassive
                                                            E10000</a></li>
                                                    <li><a href="/products/sonicwall-supermassive-9000/">SuperMassive
                                                            9000</a></li>
                                                    <li><a href="/products/sonicwall-tz/">TZ Series</a></li>
                                                    <li><a href="/products/sonicwall-wxa/">WXA Series</a></li>
                                                </ul>
                                            </li>
                                            <li class="subLinks">
                                                <a href="/solutions/secure-mobile-access/">
                                                    <span>Secure Remote Access</span>
                                                    <i class="menu-indicator pull-right"></i>
                                                </a>
                                                <ul class="tier4">
                                                    <li><a href="/products/sonicwall-e-class-sra/">Aventail E-Class SRA
                                                            Series</a></li>
                                                    <li><a href="/products/defender/">Defender</a></li>
                                                    <li><a href="/products/sonicwall-mobile-connect/">Mobile Connect</a>
                                                    </li>
                                                    <li><a href="/products/sonicwall-sra-appliance/">SRA Appliance
                                                            Series</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="subLinks">
                                        <a href="/solutions/performance-monitoring/">
                                            <span>Performance Monitoring</span>
                                            <i class="menu-indicator pull-right"></i>
                                        </a>
                                        <ul class="tier3">
                                            <li>
                                                <a href="/products/foglight-application-performance-monitoring/">Foglight
                                                    Application Performance Monitoring</a>
                                            </li>
                                            <li>
                                                <a href="/products/foglight-application-performance-monitoring-saas-edition/">Foglight
                                                    Application Performance Monitoring SaaS Edition</a>
                                            </li>
                                            <li>
                                                <a href="/products/foglight-for-cross-platform-databases/">Foglight
                                                    for Cross-Platform Databases</a>
                                            </li>
                                            <li>
                                                <a href="/products/foglight-for-virtualization-enterprise-edition/">Foglight
                                                    for Virtualization, Enterprise Edition</a>
                                            </li>
                                            <li>
                                                <a href="/products/foglight-for-virtualization-standard-edition/">Foglight
                                                    for Virtualization, Standard Edition</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="subLinks">
                                        <a href="/solutions/security/">
                                            <span>Security</span>
                                            <i class="menu-indicator pull-right"></i>
                                        </a>
                                        <ul class="tier3">
                                            <li class="subLinks">
                                                <a href="/solutions/email-security/">
                                                    <span>Email Security</span>
                                                    <i class="menu-indicator pull-right"></i>
                                                </a>
                                                <ul class="tier4">
                                                    <li><a href="/products/archive-manager/">Archive Manager</a></li>
                                                    <li><a href="/products/sonicwall-comprehensive-anti-spam/">Comprehensive
                                                            Anti-Spam Service</a></li>
                                                    <li><a href="/products/sonicwall-email-security-appliances/">Email
                                                            Security Appliances and Software</a></li>
                                                    <li><a href="/products/sonicwall-hosted-email-security/">Hosted Email
                                                            Security</a></li>
                                                    <li><a href="/products/recovery-manager-for-exchange/">Recovery Manager
                                                            for Exchange</a></li>
                                                    <li><a href="/products/security-explorer/">Security Explorer</a></li>
                                                </ul>
                                            </li>
                                            <li class="subLinks">
                                                <a href="/solutions/endpoint-management/">
                                                    <span>Endpoint Management</span>
                                                    <i class="menu-indicator pull-right"></i>
                                                </a>
                                                <ul class="tier4">
                                                    <li><a href="/products/changebase/">ChangeBASE</a></li>
                                                    <li><a href="/products/desktop-authority-management-suite/">Desktop
                                                            Authority Management Suite</a></li>
                                                    <li>
                                                        <a href="/kace/">KACE Product Line</a>
                                                    </li>
                                                    <li><a href="/products/remotescan-enterprise/">RemoteScan Enterprise</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="subLinks">
                                                <a href="/solutions/endpoint-security/">
                                                    <span>Endpoint Security</span>
                                                    <i class="menu-indicator pull-right"></i>
                                                </a>
                                                <ul class="tier4">
                                                    <li><a href="/products/sonicwall-anti-spam-desktop/">Anti-Spam
                                                            Desktop</a></li>
                                                    <li><a href="/products/sonicwall-enforced-anti-virus/">Enforced
                                                            Anti-Virus and Anti-Spyware</a></li>
                                                    <li>
                                                        <a href="/kace/">KACE Product Line</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="subLinks">
                                                <a href="/solutions/identity-and-access-management/">
                                                    <span>Identity &amp; Access Management</span>
                                                    <i class="menu-indicator pull-right"></i>
                                                </a>
                                                <ul class="tier4">
                                                    <li><a href="/products/activeroles-server/">ActiveRoles Server</a></li>
                                                    <li><a href="/products/defender/">Defender</a></li>
                                                    <li><a href="/products/cloud-access-manager/">Dell One Identity Cloud
                                                            Access Manager</a></li>
                                                    <li><a href="/products/identity-manager/">Identity Manager</a></li>
                                                    <li><a href="/products/identity-manager-data-governance/">Identity
                                                            Manager-Data Governance Edition</a></li>
                                                    <li><a href="/products/password-manager/">Password Manager</a></li>
                                                    <li><a href="/products/privileged-password-manager/">Privileged Password
                                                            Manager</a></li>
                                                    <li><a href="/products/privileged-access-suite-for-unix/">Privileged
                                                            Access Suite for Unix</a></li>
                                                </ul>
                                            </li>
                                            <li class="subLinks">
                                                <a href="/solutions/network-security/">
                                                    <span>Network Security</span>
                                                    <i class="menu-indicator pull-right"></i>
                                                </a>
                                                <ul class="tier4">
                                                    <li><a href="/products/sonicwall-analyzer/">Analyzer</a></li>
                                                    <li><a href="/products/sonicpoint-wireless-access-point-series/">Wireless
                                                            Access Point Series</a></li>
                                                    <li><a href="/products/sonicwall-e-class-nsa/">E-Class NSA Series</a>
                                                    </li>
                                                    <li><a href="/products/sonicwall-gms/">Global Management System</a></li>
                                                    <li><a href="/products/sonicwall-nsa/">NSA Series</a></li>
                                                    <li><a href="/products/sonicwall-scrutinizer/">Scrutinizer</a></li>
                                                    <li><a href="/products/sonicwall-supermassive-e10000/">SuperMassive
                                                            E10000</a></li>
                                                    <li><a href="/products/sonicwall-supermassive-9000/">SuperMassive
                                                            9000</a></li>
                                                    <li><a href="/products/sonicwall-tz/">TZ Series</a></li>
                                                    <li><a href="/products/sonicwall-wxa/">WXA Series</a></li>
                                                </ul>
                                            </li>
                                            <li class="subLinks">
                                                <a href="/solutions/secure-mobile-access/">
                                                    <span>Secure Remote Access</span>
                                                    <i class="menu-indicator pull-right"></i>
                                                </a>
                                                <ul class="tier4">
                                                    <li><a href="/products/sonicwall-e-class-sra/">Aventail E-Class SRA
                                                            Series</a></li>
                                                    <li><a href="/products/defender/">Defender</a></li>
                                                    <li><a href="/products/sonicwall-mobile-connect/">Mobile Connect</a>
                                                    </li>
                                                    <li><a href="/products/sonicwall-sra-appliance/">SRA Appliance
                                                            Series</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="subLinks">
                                        <a href="/solutions/virtualization-management/">
                                            <span>Virtualization Management</span>
                                            <i class="menu-indicator pull-right"></i>
                                        </a>
                                        <ul class="tier3">
                                            <li>
                                                <a href="/products/foglight-for-storage-management/">Foglight for
                                                    Storage Management</a>
                                            </li>
                                            <li>
                                                <a href="/products/foglight-for-virtualization-enterprise-edition/">Foglight
                                                    for Virtualization, Enterprise Edition</a>
                                            </li>
                                            <li>
                                                <a href="/products/foglight-for-virtualization-standard-edition/">Foglight
                                                    for Virtualization, Standard Edition</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="subLinks">
                                        <a href="/solutions/windows-server-management/">
                                            <span>Windows Server Management</span>
                                            <i class="menu-indicator pull-right"></i>
                                        </a>
                                        <ul class="tier3">
                                            <li>
                                                <a href="/products/active-administrator/">Active Administrator</a>
                                            </li>
                                            <li>
                                                <a href="/products/change-auditor/">Change Auditor</a>
                                            </li>
                                            <li>
                                                <a href="/products/enterprise-reporter/">Enterprise Reporter</a>
                                            </li>
                                            <li>
                                                <a href="/products/quick-apps-for-sharepoint/">Quick Apps for
                                                    SharePoint</a>
                                            </li>
                                            <li>
                                                <a href="/products/recovery-manager-for-active-directory/">Recovery
                                                    Manager for Active Directory</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="subLinks">
                                        <a href="/solutions/windows-server-migration/">
                                            <span>Windows Server Migration</span>
                                            <i class="menu-indicator pull-right"></i>
                                        </a>
                                        <ul class="tier3">
                                            <li>
                                                <a href="/products/migration-manager-for-active-directory/">Migration
                                                    Manager for Active Directory</a>
                                            </li>
                                            <li>
                                                <a href="/products/migration-manager-for-exchange/">Migration Manager for Exchange</a>
                                            </li>
                                            <li>
                                                <a href="/products/migration-suite-for-sharepoint/">Migration Suite for SharePoint</a>
                                            </li>
                                            <li>
                                                <a href="/products/migrator-for-notes-to-exchange/">Migrator for Notes to Exchange</a>
                                            </li>
                                            <li>
                                                <a href="/products/migrator-for-groupwise/">Migrator for GroupWise</a>
                                            </li>
                                            <li>
                                                <a href="/products/migrator-for-notes-to-sharepoint/">Migrator for Notes to SharePoint</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="subLinks">
                                        <a href="#">
                                            <span>By Product Line</span>
                                            <i class="menu-indicator pull-right"></i>
                                        </a>
                                        <ul class="tier3">
                                            <li>
                                                <a href="#">Boomi</a>
                                            </li>
                                            <li>
                                                <a href="#">Change Auditor</a>
                                            </li>
                                            <li>
                                                <a href="/kace/">KACE</a>
                                            </li>
                                            <li>
                                                <a href="#">Migration Manager</a>
                                            </li>
                                            <li>
                                                <a href="#">Recovery Manager</a>
                                            </li>
                                            <li>
                                                <a href="#">RemoteScan</a>
                                            </li>
                                            <li>
                                                <a href="#">SonicWALL</a>
                                            </li>
                                            <li>
                                                <a href="#">Statistica</a>
                                            </li>
                                            <li>
                                                <a href="#">Toad</a>
                                            </li>
                                            <li>
                                                <a href="#">UCCS</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="/products/">
                                            <span>View all Products</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="subLinks">
                                <a href="#">
                                    <span>Solutions</span>
                                    <i class="menu-indicator pull-right"></i>
                                </a>
                                <ul class="tier2">
                                    <li class="subLinks">
                                        <a href="#">
                                            <span>for IT &amp; Security Management</span>
                                            <i class="menu-indicator pull-right"></i>
                                        </a>
                                        <ul class="tier3">
                                            <li class="subLinks">
                                                <a href="/solutions/data-center-and-cloud-management/">
                                                    <span>Data Center &amp; Cloud Management</span>
                                                    <i class="menu-indicator pull-right"></i>
                                                </a>
                                                <ul class="tier4">
                                                    <li>
                                                        <a href="/solutions/cloud-management/">Cloud Management</a>
                                                    </li>
                                                    <li>
                                                        <a href="/solutions/endpoint-management/">Endpoint Mangement</a>
                                                    </li>
                                                    <li>
                                                        <a href="/solutions/performance-monitoring/">Performance
                                                            Monitoring</a>
                                                    </li>
                                                    <li>
                                                        <a href="/solutions/virtualization-management/">Virtualization
                                                            Management</a>
                                                    </li>
                                                    <li>
                                                        <a href="/solutions/windows-server-migration/">Windows Server
                                                            Migration</a>
                                                    </li>
                                                    <li>
                                                        <a href="/solutions/windows-server-management/">Windows Server
                                                            Management</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="subLinks">
                                                <a href="/solutions/data-protection/">
                                                    <span>Data Protection</span>
                                                    <i class="menu-indicator pull-right"></i>
                                                </a>
                                                <ul class="tier4">
                                                    <li>
                                                        <a href="/solutions/application-protection/">Application-Specific
                                                            Data Protection</a>
                                                    </li>
                                                    <li>
                                                        <a href="/solutions/backup-and-recovery/">Backup &amp; Recovery</a>
                                                    </li>
                                                    <li>
                                                        <a href="/solutions/deduplication-appliances/">Deduplication
                                                            Appliances</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="subLinks">
                                                <a href="/solutions/information-management/">
                                                    <span>Information Management</span>
                                                    <i class="menu-indicator pull-right"></i>
                                                </a>
                                                <ul class="tier4">
                                                    <li>
                                                        <a href="/solutions/application-and-data-integration/">Application
                                                            &amp; Data Integration</a>
                                                    </li>
                                                    <li>
                                                        <a href="/solutions/business-intelligence/">Business
                                                            Intelligence</a>
                                                    </li>
                                                    <li>
                                                        <a href="/solutions/big-data-analytics/">Big Data Analytics</a>
                                                    </li>
                                                    <li>
                                                        <a href="/solutions/database-development-and-management/">Database
                                                            Development &amp; Management</a>
                                                    </li>
                                                    <li>
                                                        <a href="/solutions/database-replication-and-backup/">Database
                                                            Replication &amp; Backup</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="subLinks">
                                                <a href="/solutions/mobile-workforce-management/">
                                                    <span>Mobile Workforce Management</span>
                                                    <i class="menu-indicator pull-right"></i>
                                                </a>
                                                <ul class="tier4">
                                                    <li>
                                                        <a href="/solutions/desktop-virtualization/">Desktop
                                                            Virtualization</a>
                                                    </li>
                                                    <li>
                                                        <a href="/solutions/enterprise-mobility-management/">Enterprise
                                                            Mobility Management</a>
                                                    </li>
                                                    <li>
                                                        <a href="/solutions/endpoint-security/">Endpoint Security</a>
                                                    </li>
                                                    <li>
                                                        <a href="/solutions/network-security/">Network Security</a>
                                                    </li>
                                                    <li>
                                                        <a href="/solutions/secure-remote-access/">Secure Remote Access</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="subLinks">
                                                <a href="/solutions/security/">
                                                    <span>Security</span>
                                                    <i class="menu-indicator pull-right"></i>
                                                </a>
                                                <ul class="tier4">
                                                    <li>
                                                        <a href="/solutions/email-security/">Email Security</a>
                                                    </li>
                                                    <li>
                                                        <a href="/solutions/endpoint-security/">Endpoint Security</a>
                                                    </li>
                                                    <li>
                                                        <a href="/solutions/identity-and-access-management/">Identity &amp;
                                                            Access Management</a>
                                                    </li>
                                                    <li>
                                                        <a href="/solutions/network-security/">Network Security</a>
                                                    </li>
                                                    <li>
                                                        <a href="/solutions/secure-remote-access/">Secure Remote Access</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="subLinks">
                                        <a href="#">
                                            <span>By Platform</span>
                                            <i class="menu-indicator pull-right"></i>
                                        </a>
                                        <ul class="tier3">
                                            <li>
                                                <a href="http://software-dell-com/platforms/active-directory/">Active
                                                    Directory</a>
                                            </li>
                                            <li>
                                                <a href="http://software-dell-com/platforms/backup-deduplication-appliances/">Backup
                                                    &amp; Deduplication Appliances</a>
                                            </li>
                                            <li>
                                                <a href="http://software-dell-com/platforms/endpoint-management-appliances/">Endpoint
                                                    System Management Appliances</a>
                                            </li>
                                            <li>
                                                <a href="http://software-dell-com/platforms/exchange/">Exchange</a>
                                            </li>
                                            <li>
                                                <a href="http://software-dell-com/platforms/google">Google</a>
                                            </li>
                                            <li>
                                                <a href="http://software-dell-com/platforms/groupwise-nds">GroupWise &amp;
                                                    NDS</a>
                                            </li>
                                            <li>
                                                <a href="http://software-dell-com/platforms/hadoop/">Hadoop</a>
                                            </li>
                                            <li>
                                                <a href="http://software-dell-com/platforms/hyper-v/">Hyper-V</a>
                                            </li>
                                            <li>
                                                <a href="http://software-dell-com/platforms/lotus-notes/">Lotus Notes</a>
                                            </li>
                                            <li>
                                                <a href="http://software-dell-com/platforms/lync-server/">Lync Server</a>
                                            </li>
                                            <li>
                                                <a href="http://software-dell-com/platforms/office-365/">Office 365</a>
                                            </li>
                                            <li>
                                                <a href="http://software-dell-com/platforms/oracle/">Oracle</a>
                                            </li>
                                            <li>
                                                <a href="http://software-dell-com/platforms/sharepoint/">SharePoint</a>
                                            </li>
                                            <li>
                                                <a href="http://software-dell-com/platforms/sql-server/">SQL Server</a>
                                            </li>
                                            <li>
                                                <a href="http://software-dell-com/platforms/vmware/">VMware</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="/solutions/">
                                            <span>View all Solutions</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="/trials/">Trials</a>
                            </li>
                            <li>
                                <a href="/buy/">Buy</a>
                            </li>
                            <li>
                                <a href="http://support.software.dell.com">Support</a>
                            </li>
                            <li>
                                <a href="http://en.community.dell.com/techcenter/" target="_blank">Communities</a>
                            </li>
                            <li>
                                <a href="/partners/">Partners</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <!-- header ends here -->

        <?php
            echo $widget->content();
        ?>

        <!-- footer starts here -->
        <footer id="footer">
            <div class="footer-top-section">
                <ul class="menu-links list-unstyled container">
                    <li class="subLinks">
                        <span>About Us <i class="menu-indicator pull-right"></i></span>
                        <ul>
                            <li><a href="/company/">Company</a></li>
                            <li><a href="/company/contact-us.aspx">Contact Us</a></li>
                            <li><a
                                    href="http://www.dell.com/Learn/us/en/uscorp1/about-dell-newsroom?c=us&l=en&s=corp&ref=ff42&delphi:gr=true"
                                    target="_blank">News</a></li>
                            <li><a href="/partners">Partners</a></li>
                        </ul>
                    </li>
                    <li class="subLinks">
                        <span>Resources <i class="menu-indicator pull-right"></i></span>
                        <ul>
                            <li><a href="http://en.community.dell.com/techcenter/" target="_blank">Communities</a></li>
                            <li><a href="/documents/">Documents</a></li>
                            <li><a href="/events/">Events</a></li>
                            <li><a href="/video-gallery/">Videos</a></li>
                        </ul>
                    </li>
                    <li class="subLinks">
                        <span>Support <i class="menu-indicator pull-right"></i></span>
                        <ul>
                            <li><a href="https://support.software.dell.com/professional-services-product-select/"
                                   target="_blank">Professional Services</a></li>
                            <li><a href="https://support.software.dell.com/essentials/benefits-of-renewing-support"
                                   target="_blank">Renew Support</a></li>
                            <li><a href="/support/" target="_blank">Technical Support</a></li>
                            <li><a href="https://support.software.dell.com/training-product-select/" target="_blank">Training
                                    & Certification</a></li>
                        </ul>
                    </li>
                    <li class="subLinks">
                        <span>Social Networks <i class="menu-indicator pull-right"></i></span>
                        <ul>
                            <li><a href="http://www.facebook.com/dellsoftware" target="_blank">Facebook</a></li>
                            <li><a href="https://plus.google.com/u/0/103474799682341904292/posts"
                                   target="_blank">Google+</a></li>
                            <li>
                                <a href="http://www.linkedin.com/groups/Dell-Software-4793472?gid=4793472&mostPopular=&trk=tyah"
                                   target="_blank">LinkedIn</a></li>
                            <li><a href="http://twitter.com/dellsoftware" target="_blank">Twitter</a></li>
                        </ul>
                    </li>
                    <li id="country-selector" class="subLinks">
            <span>
              <span id="current-country" class="flag-us">United States <span>&nbsp;</span></span>
              <i class="menu-indicator pull-right"></i>
            </span>
                        <div id="country-popup">
                            <div>
                                <div>
                                    <ul>
                                        <!--<li><a href="/" class="active">United States (English)</a></li>-->
                                        <li><a href="/br-pt/">Brazil (Português)</a></li>
                                        <li><a href="/cn-zh/">China (中文)</a></li>
                                        <li><a href="/fr-fr/">France (Français)</a></li>
                                        <li><a href="/de-de/">Germany (Deutsch)</a></li>
                                        <li><a href="/jp-ja/">Japan (日本語)</a></li>
                                        <li><a href="/mx-es/">Mexico (Español)</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="footer-shadow-section"></div>

            <div class="bg-light-grey hidden-xs">
                <div id="partners" class="pt-20 pb-20 text-sm container container-fluid">
                    <aside class="row">
                        <section class="col-sm-3 col-md-2">
                            <a href="http://www.boomi.com/" target="_blank">Boomi</a>

                            <p>Cloud-based application integration</p>
                        </section>
                        <section class="col-sm-3 col-md-2">
                            <a href="http://www.enstratius.com/home" target="_blank">Enstratius</a>

                            <p>Cloud infrastructure management</p>
                        </section>
                        <section class="col-sm-3 col-md-2">
                            <a href="http://www.foglight.com/" target="_blank">Foglight</a>

                            <p>SaaS for application performance monitoring</p>
                        </section>
                        <section class="col-sm-3 col-md-2">
                            <a href="http://www.remote-scan.com/" target="_blank">RemoteScan</a>

                            <p>Scanner connectivity for virtual environments</p>
                        </section>
                        <section class="col-sm-3 col-md-2">
                            <a href="http://www.sonicwall.com/us/en/" target="_blank">SonicWALL</a>

                            <p>Security for networks, mobility and email</p>
                        </section>
                        <section class="col-sm-3 col-md-2">
                            <a href="http://www.statsoft.com/" target="_blank">StatSoft</a>

                            <p>Advanced analytics platform</p>
                        </section>
                    </aside>
                </div>
            </div>

            <div class="footer-copyright-section">
                <ul class="menu-links list-inline row">
                    <li><span>©2015 Dell Inc. ALL RIGHTS RESERVED.</span></li>
                    <li><a href="/legal/">Terms of Use</a></li>
                    <li><a href="/legal/privacy.aspx">Privacy</a></li>
                    <li><a href="/feedback">Feedback</a></li>
                </ul>
            </div>
        </footer>
        <!-- footer ends here -->
    </div>
</div>

<script src="/static/library/modernizr.min.js"></script>
<script src="/static/library/jQuery/jquery-1.9.1.min.js"></script>
<script src="/static/library/jQueryUI/jquery-ui-1.11.4.min.js"></script>
<script src="/static/library/jQuery/jquery.cookie.js"></script>
<script src="/static/library/jQuery/jquery.dotdotdot.js"></script>
<script src="/static/library/jQuery/jquery.placeholder.js"></script>
<script src="/static/library/jQuery/jquery.color-2.1.2.min.js"></script>
<script src="/static/library/jQuery/jquery.slidepagination.js"></script>
<script src="/static/library/bootstrap-3.3.4.min.js"></script>
<script src="/static/js/responsive-header-footer.js"></script>
<script src="/static/js/default.js"></script>

<?php
    echo $widget->js();
?>

</body>
</html>