<?php

$htaccess = 'Options FollowSymlinks'.PHP_EOL.PHP_EOL;

$htaccess .= '<Files .*>'.PHP_EOL;
$htaccess .= '	Order Deny,Allow'.PHP_EOL;
$htaccess .= '	Deny From All'.PHP_EOL;
$htaccess .= '</Files>'.PHP_EOL.PHP_EOL;

$htaccess .= '<IfModule mod_rewrite.c>'.PHP_EOL;
$htaccess .= '	RewriteEngine On'.PHP_EOL;
$htaccess .= '	RewriteRule ^(?:cache|system|tmp)\b.* '.$site_url.'error/403/ [L]'.PHP_EOL.PHP_EOL;

$htaccess .= '	ErrorDocument 401 '.$site_url.'error/401/'.PHP_EOL;
$htaccess .= '	ErrorDocument 403 '.$site_url.'error/403/'.PHP_EOL;
$htaccess .= '	ErrorDocument 404 '.$site_url.'error/404/'.PHP_EOL;
$htaccess .= '	ErrorDocument 500 '.$site_url.'error/500/'.PHP_EOL.PHP_EOL;

$htaccess .= '	RewriteCond  %{REQUEST_FILENAME} !-f'.PHP_EOL;
$htaccess .= '	RewriteCond  %{REQUEST_FILENAME} !-d'.PHP_EOL;
$htaccess .= '	RewriteRule .* index.php/$0 [L]'.PHP_EOL.PHP_EOL;

$htaccess .= '	### EN: BLOCKING THE ROBOTS - Blocked robots will see an 403 /error.'.PHP_EOL;
$htaccess .= '	RewriteCond  %{HTTP_USER_AGENT} ^BlackWidow [OR]'.PHP_EOL;
$htaccess .= '	RewriteCond  %{HTTP_USER_AGENT} ^Bot\ mailto:craftbot@yahoo.com [OR]'.PHP_EOL;
$htaccess .= '	RewriteCond  %{HTTP_USER_AGENT} ^ChinaClaw [OR]'.PHP_EOL;
$htaccess .= '	RewriteCond  %{HTTP_USER_AGENT} ^Custo [OR]'.PHP_EOL;
$htaccess .= '	RewriteCond  %{HTTP_USER_AGENT} ^DISCo [OR]'.PHP_EOL;
$htaccess .= '	RewriteCond  %{HTTP_USER_AGENT} ^Download\ Demon [OR]'.PHP_EOL;
$htaccess .= '	RewriteCond  %{HTTP_USER_AGENT} ^eCatch [OR]'.PHP_EOL;
$htaccess .= '	RewriteCond  %{HTTP_USER_AGENT} ^EirGrabber [OR]'.PHP_EOL;
$htaccess .= '	RewriteCond  %{HTTP_USER_AGENT} ^EmailSiphon [OR]'.PHP_EOL;
$htaccess .= '	RewriteCond  %{HTTP_USER_AGENT} ^EmailWolf [OR]'.PHP_EOL;
$htaccess .= '	RewriteCond  %{HTTP_USER_AGENT} ^Express\ WebPictures [OR]'.PHP_EOL;
$htaccess .= '	RewriteCond  %{HTTP_USER_AGENT} ^ExtractorPro [OR]'.PHP_EOL;
$htaccess .= '	RewriteCond  %{HTTP_USER_AGENT} ^EyeNetIE [OR]'.PHP_EOL;
$htaccess .= '	RewriteCond  %{HTTP_USER_AGENT} ^FlashGet [OR]'.PHP_EOL;
$htaccess .= '	RewriteCond  %{HTTP_USER_AGENT} ^GetRight [OR]'.PHP_EOL;
$htaccess .= '	RewriteCond  %{HTTP_USER_AGENT} ^GetWeb! [OR]'.PHP_EOL;
$htaccess .= '	RewriteCond  %{HTTP_USER_AGENT} ^Go!Zilla [OR]'.PHP_EOL;
$htaccess .= '	RewriteCond  %{HTTP_USER_AGENT} ^Go-Ahead-Got-It [OR]'.PHP_EOL;
$htaccess .= '	RewriteCond  %{HTTP_USER_AGENT} ^GrabNet [OR]'.PHP_EOL;
$htaccess .= '	RewriteCond  %{HTTP_USER_AGENT} ^Grafula [OR]'.PHP_EOL;
$htaccess .= '	RewriteCond  %{HTTP_USER_AGENT} ^HMView [OR]'.PHP_EOL;
$htaccess .= '	RewriteCond  %{HTTP_USER_AGENT} HTTrack [NC,OR]'.PHP_EOL;
$htaccess .= '	RewriteCond  %{HTTP_USER_AGENT} ^Image\ Stripper [OR]'.PHP_EOL;
$htaccess .= '	RewriteCond  %{HTTP_USER_AGENT} ^Image\ Sucker [OR]'.PHP_EOL;
$htaccess .= '	RewriteCond  %{HTTP_USER_AGENT} Indy\ Library [NC,OR]'.PHP_EOL;
$htaccess .= '	RewriteCond  %{HTTP_USER_AGENT} ^InterGET [OR]'.PHP_EOL;
$htaccess .= '	RewriteCond  %{HTTP_USER_AGENT} ^Internet\ Ninja [OR]'.PHP_EOL;
$htaccess .= '	RewriteCond  %{HTTP_USER_AGENT} ^JetCar [OR]'.PHP_EOL;
$htaccess .= '	RewriteCond  %{HTTP_USER_AGENT} ^JOC\ Web\ Spider [OR]'.PHP_EOL;
$htaccess .= '	RewriteCond  %{HTTP_USER_AGENT} ^larbin [OR]'.PHP_EOL;
$htaccess .= '	RewriteCond  %{HTTP_USER_AGENT} ^LeechFTP [OR]'.PHP_EOL;
$htaccess .= '	RewriteCond  %{HTTP_USER_AGENT} ^Mass\ Downloader [OR]'.PHP_EOL;
$htaccess .= '	RewriteCond  %{HTTP_USER_AGENT} ^MIDown\ tool [OR]'.PHP_EOL;
$htaccess .= '	RewriteCond  %{HTTP_USER_AGENT} ^Mister\ PiX [OR]'.PHP_EOL;
$htaccess .= '	RewriteCond  %{HTTP_USER_AGENT} ^Navroad [OR]'.PHP_EOL;
$htaccess .= '	RewriteCond  %{HTTP_USER_AGENT} ^NearSite [OR]'.PHP_EOL;
$htaccess .= '	RewriteCond  %{HTTP_USER_AGENT} ^NetAnts [OR]'.PHP_EOL;
$htaccess .= '	RewriteCond  %{HTTP_USER_AGENT} ^NetSpider [OR]'.PHP_EOL;
$htaccess .= '	RewriteCond  %{HTTP_USER_AGENT} ^Net\ Vampire [OR]'.PHP_EOL;
$htaccess .= '	RewriteCond  %{HTTP_USER_AGENT} ^NetZIP [OR]'.PHP_EOL;
$htaccess .= '	RewriteCond  %{HTTP_USER_AGENT} ^Octopus [OR]'.PHP_EOL;
$htaccess .= '	RewriteCond  %{HTTP_USER_AGENT} ^Offline\ Explorer [OR]'.PHP_EOL;
$htaccess .= '	RewriteCond  %{HTTP_USER_AGENT} ^Offline\ Navigator [OR]'.PHP_EOL;
$htaccess .= '	RewriteCond  %{HTTP_USER_AGENT} ^PageGrabber [OR]'.PHP_EOL;
$htaccess .= '	RewriteCond  %{HTTP_USER_AGENT} ^Papa\ Foto [OR]'.PHP_EOL;
$htaccess .= '	RewriteCond  %{HTTP_USER_AGENT} ^pavuk [OR]'.PHP_EOL;
$htaccess .= '	RewriteCond  %{HTTP_USER_AGENT} ^pcBrowser [OR]'.PHP_EOL;
$htaccess .= '	RewriteCond  %{HTTP_USER_AGENT} ^RealDownload [OR]'.PHP_EOL;
$htaccess .= '	RewriteCond  %{HTTP_USER_AGENT} ^ReGet [OR]'.PHP_EOL;
$htaccess .= '	RewriteCond  %{HTTP_USER_AGENT} ^SiteSnagger [OR]'.PHP_EOL;
$htaccess .= '	RewriteCond  %{HTTP_USER_AGENT} ^SmartDownload [OR]'.PHP_EOL;
$htaccess .= '	RewriteCond  %{HTTP_USER_AGENT} ^SuperBot [OR]'.PHP_EOL;
$htaccess .= '	RewriteCond  %{HTTP_USER_AGENT} ^SuperHTTP [OR]'.PHP_EOL;
$htaccess .= '	RewriteCond  %{HTTP_USER_AGENT} ^Surfbot [OR]'.PHP_EOL;
$htaccess .= '	RewriteCond  %{HTTP_USER_AGENT} ^tAkeOut [OR]'.PHP_EOL;
$htaccess .= '	RewriteCond  %{HTTP_USER_AGENT} ^Teleport\ Pro [OR]'.PHP_EOL;
$htaccess .= '	RewriteCond  %{HTTP_USER_AGENT} ^VoidEYE [OR]'.PHP_EOL;
$htaccess .= '	RewriteCond  %{HTTP_USER_AGENT} ^Web\ Image\ Collector [OR]'.PHP_EOL;
$htaccess .= '	RewriteCond  %{HTTP_USER_AGENT} ^Web\ Sucker [OR]'.PHP_EOL;
$htaccess .= '	RewriteCond  %{HTTP_USER_AGENT} ^WebAuto [OR]'.PHP_EOL;
$htaccess .= '	RewriteCond  %{HTTP_USER_AGENT} ^WebCopier [OR]'.PHP_EOL;
$htaccess .= '	RewriteCond  %{HTTP_USER_AGENT} ^WebFetch [OR]'.PHP_EOL;
$htaccess .= '	RewriteCond  %{HTTP_USER_AGENT} ^WebGo\ IS [OR]'.PHP_EOL;
$htaccess .= '	RewriteCond  %{HTTP_USER_AGENT} ^WebLeacher [OR]'.PHP_EOL;
$htaccess .= '	RewriteCond  %{HTTP_USER_AGENT} ^WebReaper [OR]'.PHP_EOL;
$htaccess .= '	RewriteCond  %{HTTP_USER_AGENT} ^WebSauger [OR]'.PHP_EOL;
$htaccess .= '	RewriteCond  %{HTTP_USER_AGENT} ^Website\ eXtractor [OR]'.PHP_EOL;
$htaccess .= '	RewriteCond  %{HTTP_USER_AGENT} ^Website\ Quester [OR]'.PHP_EOL;
$htaccess .= '	RewriteCond  %{HTTP_USER_AGENT} ^WebStripper [OR]'.PHP_EOL;
$htaccess .= '	RewriteCond  %{HTTP_USER_AGENT} ^WebWhacker [OR]'.PHP_EOL;
$htaccess .= '	RewriteCond  %{HTTP_USER_AGENT} ^WebZIP [OR]'.PHP_EOL;
$htaccess .= '	RewriteCond  %{HTTP_USER_AGENT} ^Wget [OR]'.PHP_EOL;
$htaccess .= '	RewriteCond  %{HTTP_USER_AGENT} ^Widow [OR]'.PHP_EOL;
$htaccess .= '	RewriteCond  %{HTTP_USER_AGENT} ^WWWOFFLE [OR]'.PHP_EOL;
$htaccess .= '	RewriteCond  %{HTTP_USER_AGENT} ^Xaldon\ WebSpider [OR]'.PHP_EOL;
$htaccess .= '	RewriteCond  %{HTTP_USER_AGENT} ^Zeus'.PHP_EOL;
$htaccess .= '	RewriteRule ^.* - [F,L]'.PHP_EOL;
$htaccess .= '</IfModule>'.PHP_EOL.PHP_EOL;