Options FollowSymlinks

<Files .*>
	Order Deny,Allow
	Deny From All
</Files>

<IfModule mod_rewrite.c>
	RewriteEngine On
	RewriteRule ^(?:cache|system|tmp)\b.* http://localhost/root/error/403/ [L]

	ErrorDocument 401 http://localhost/root/error/401/
	ErrorDocument 403 http://localhost/root/error/403/
	ErrorDocument 404 http://localhost/root/error/404/
	ErrorDocument 500 http://localhost/root/error/500/
	
	RewriteCond %{REQUEST_FILENAME} !-f
	RewriteCond %{REQUEST_FILENAME} !-d
	RewriteRule .* index.php/$0 [L]

	### EN: BLOCKING THE ROBOTS - Blocked robots will see an 403 /error.
	RewriteCond %{HTTP_USER_AGENT} ^BlackWidow [OR]
	RewriteCond %{HTTP_USER_AGENT} ^Bot\ mailto:craftbot@yahoo.com [OR]
	RewriteCond %{HTTP_USER_AGENT} ^ChinaClaw [OR]
	RewriteCond %{HTTP_USER_AGENT} ^Custo [OR]
	RewriteCond %{HTTP_USER_AGENT} ^DISCo [OR]
	RewriteCond %{HTTP_USER_AGENT} ^Download\ Demon [OR]
	RewriteCond %{HTTP_USER_AGENT} ^eCatch [OR]
	RewriteCond %{HTTP_USER_AGENT} ^EirGrabber [OR]
	RewriteCond %{HTTP_USER_AGENT} ^EmailSiphon [OR]
	RewriteCond %{HTTP_USER_AGENT} ^EmailWolf [OR]
	RewriteCond %{HTTP_USER_AGENT} ^Express\ WebPictures [OR]
	RewriteCond %{HTTP_USER_AGENT} ^ExtractorPro [OR]
	RewriteCond %{HTTP_USER_AGENT} ^EyeNetIE [OR]
	RewriteCond %{HTTP_USER_AGENT} ^FlashGet [OR]
	RewriteCond %{HTTP_USER_AGENT} ^GetRight [OR]
	RewriteCond %{HTTP_USER_AGENT} ^GetWeb! [OR]
	RewriteCond %{HTTP_USER_AGENT} ^Go!Zilla [OR]
	RewriteCond %{HTTP_USER_AGENT} ^Go-Ahead-Got-It [OR]
	RewriteCond %{HTTP_USER_AGENT} ^GrabNet [OR]
	RewriteCond %{HTTP_USER_AGENT} ^Grafula [OR]
	RewriteCond %{HTTP_USER_AGENT} ^HMView [OR]
	RewriteCond %{HTTP_USER_AGENT} HTTrack [NC,OR]
	RewriteCond %{HTTP_USER_AGENT} ^Image\ Stripper [OR]
	RewriteCond %{HTTP_USER_AGENT} ^Image\ Sucker [OR]
	RewriteCond %{HTTP_USER_AGENT} Indy\ Library [NC,OR]
	RewriteCond %{HTTP_USER_AGENT} ^InterGET [OR]
	RewriteCond %{HTTP_USER_AGENT} ^Internet\ Ninja [OR]
	RewriteCond %{HTTP_USER_AGENT} ^JetCar [OR]
	RewriteCond %{HTTP_USER_AGENT} ^JOC\ Web\ Spider [OR]
	RewriteCond %{HTTP_USER_AGENT} ^larbin [OR]
	RewriteCond %{HTTP_USER_AGENT} ^LeechFTP [OR]
	RewriteCond %{HTTP_USER_AGENT} ^Mass\ Downloader [OR]
	RewriteCond %{HTTP_USER_AGENT} ^MIDown\ tool [OR]
	RewriteCond %{HTTP_USER_AGENT} ^Mister\ PiX [OR]
	RewriteCond %{HTTP_USER_AGENT} ^Navroad [OR]
	RewriteCond %{HTTP_USER_AGENT} ^NearSite [OR]
	RewriteCond %{HTTP_USER_AGENT} ^NetAnts [OR]
	RewriteCond %{HTTP_USER_AGENT} ^NetSpider [OR]
	RewriteCond %{HTTP_USER_AGENT} ^Net\ Vampire [OR]
	RewriteCond %{HTTP_USER_AGENT} ^NetZIP [OR]
	RewriteCond %{HTTP_USER_AGENT} ^Octopus [OR]
	RewriteCond %{HTTP_USER_AGENT} ^Offline\ Explorer [OR]
	RewriteCond %{HTTP_USER_AGENT} ^Offline\ Navigator [OR]
	RewriteCond %{HTTP_USER_AGENT} ^PageGrabber [OR]
	RewriteCond %{HTTP_USER_AGENT} ^Papa\ Foto [OR]
	RewriteCond %{HTTP_USER_AGENT} ^pavuk [OR]
	RewriteCond %{HTTP_USER_AGENT} ^pcBrowser [OR]
	RewriteCond %{HTTP_USER_AGENT} ^RealDownload [OR]
	RewriteCond %{HTTP_USER_AGENT} ^ReGet [OR]
	RewriteCond %{HTTP_USER_AGENT} ^SiteSnagger [OR]
	RewriteCond %{HTTP_USER_AGENT} ^SmartDownload [OR]
	RewriteCond %{HTTP_USER_AGENT} ^SuperBot [OR]
	RewriteCond %{HTTP_USER_AGENT} ^SuperHTTP [OR]
	RewriteCond %{HTTP_USER_AGENT} ^Surfbot [OR]
	RewriteCond %{HTTP_USER_AGENT} ^tAkeOut [OR]
	RewriteCond %{HTTP_USER_AGENT} ^Teleport\ Pro [OR]
	RewriteCond %{HTTP_USER_AGENT} ^VoidEYE [OR]
	RewriteCond %{HTTP_USER_AGENT} ^Web\ Image\ Collector [OR]
	RewriteCond %{HTTP_USER_AGENT} ^Web\ Sucker [OR]
	RewriteCond %{HTTP_USER_AGENT} ^WebAuto [OR]
	RewriteCond %{HTTP_USER_AGENT} ^WebCopier [OR]
	RewriteCond %{HTTP_USER_AGENT} ^WebFetch [OR]
	RewriteCond %{HTTP_USER_AGENT} ^WebGo\ IS [OR]
	RewriteCond %{HTTP_USER_AGENT} ^WebLeacher [OR]
	RewriteCond %{HTTP_USER_AGENT} ^WebReaper [OR]
	RewriteCond %{HTTP_USER_AGENT} ^WebSauger [OR]
	RewriteCond %{HTTP_USER_AGENT} ^Website\ eXtractor [OR]
	RewriteCond %{HTTP_USER_AGENT} ^Website\ Quester [OR]
	RewriteCond %{HTTP_USER_AGENT} ^WebStripper [OR]
	RewriteCond %{HTTP_USER_AGENT} ^WebWhacker [OR]
	RewriteCond %{HTTP_USER_AGENT} ^WebZIP [OR]
	RewriteCond %{HTTP_USER_AGENT} ^Wget [OR]
	RewriteCond %{HTTP_USER_AGENT} ^Widow [OR]
	RewriteCond %{HTTP_USER_AGENT} ^WWWOFFLE [OR]
	RewriteCond %{HTTP_USER_AGENT} ^Xaldon\ WebSpider [OR]
	RewriteCond %{HTTP_USER_AGENT} ^Zeus
	RewriteRule ^.* - [F,L]
</IfModule>
