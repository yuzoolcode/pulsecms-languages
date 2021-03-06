<?php

//Global
$lang_cancel = "Abbrechen";
$lang_duplicate = "Duplizieren";
$lang_help = "Hilfe";
$lang_help_url ="https://www.pulsecms.com/help";
$lang_settings = "Einstellungen";
$lang_account = "Konto";
$lang_save = "Speichern";
$lang_rename_btn = "Umbenennen";
$lang_title = "Pulse CMS";

// Auto backup
$lang_autobackup_email_subject_line = 'Pulse automatische Backup Erinnerung';
$lang_autobackup_email_text =<<<EOD
Hallo,

Deine Pulse Installation hat eine Backup ZIP Datei generiert.

Gruß,
Das Pulse CMS Team
EOD;

// Breadcrumb
$lang_breadcrumb_home = 'Startseite'; #"Startseite" or "Hauptseite"

// Login
$lang_login_forgot_password = "Passwort vergessen?";
$lang_login_forgot_password_email_body =<<<EOD
	Hallo,

	Dein Pulse Passwort lautet PASSWORD
EOD;
$lang_login_forgot_password_email_subject_line = "Hast Du dein Passwort vergessen?";
$lang_login_incorrect = "Falsches Passwort";
$lang_login_password = "Passwort";
$lang_login_button = "Weiter";
$lang_nav_logout = "Abmelden";
$lang_login_otp = "OTP Passwort";
$lang_login_welcome = "Hi!";
$lang_login_name = "Pulse Benutzer";

$lang_login_forgot_password_message = 'Dein Passwort wurde zurück gesetzt';

// Home
$lang_home_emptyfold = "Dieser Ordner ist leer.";
$lang_home_new = "Neu";
$lang_home_upload_button = "Hochladen";
$lang_home_preview = "Vorschau";

// Navigation
$lang_nav_title = "Navigation";
$lang_nav_home = "Dashboard";
$lang_nav_blocks = "Blöcke";
$lang_nav_img = "Medien";
$lang_nav_users = "Benutzer";
$lang_nav_store = "Ecommerce";
$lang_nav_blog = "Blog";
$lang_nav_pages = "Seiten";
$lang_nav_stats = "Statistik";

// Navigation logged in bar
$lang_nav_logged_in_add_block     = 'Neuen Block hinzufügen';
$lang_nav_logged_in_add_blog_post = 'Neuen Blog Eintrag hinzufügen';
$lang_nav_logged_in_add_media     = 'Neue Medien hinzufügen';
$lang_nav_logged_in_add_page      = 'Neue Seite hinzufügen';


// Gallery
$lang_gal_alt_gallery = "Alt Tag";
$lang_gal_caption_gallery = "Bildbeschreibung hier eingeben.";
$lang_gal_filename = "Dateiname";
$lang_gal_dimensions = "Dimensionen";
$lang_gal_size = "Größe";
$lang_gal_audio = "Audio";
$lang_gal_video = "Video";
$lang_gal_img = "IMG";
$lang_gal_link = "Link";
$lang_gallery_tool_tip = "Um eine Lightbox Galerie zu erstellen, musst Du hier einen neuen Ordner mit Bildern erstellen. Zum einfügen der Galerie nutze die Embed Tags.";
$lang_crop = 'Zuschneiden';
$lang_media_order = 'Reihenfolge';
$lang_media_replace = 'Austauschen';

// Pages
$lang_pages_meta = "Metadaten";
$lang_pages_title = "Seitentitel";
$lang_pages_description = "Seitenbeschreibung";

$lang_pages_css = 'Inline CSS';
$lang_pages_js = 'Inline JS';
$lang_pages_language = 'Sprache';
$lang_pages_template = 'Seitenvorlage';


// Create
$lang_create_file_or_folder = 'Neue Seite';

$lang_create_file_or_folder_block = "Neuer Block";
$lang_create_file_or_folder_blog  = "Neuer Blog";
$lang_create_file_or_folder_page  = "Neue Seite";
$lang_create_file_or_folder_media = "Neue Medien";

$lang_create_item_block = 'Block';
$lang_create_item_blog  = 'Blogeintrag';
$lang_create_item_page  = 'Seite';
$lang_create_item_media = 'Medieneintrag';
$lang_create_item_folder = 'Ordner';

$lang_create_button = "Erstellen";
$lang_create_tool_tip = "Seiten, Blöcke und Blogeinträge müssen mit '.txt' enden, was automatisch hinzugefügt wird. Um einen Ordner oder neuen Blog zu erstellen, wähle Ordner oder Blog im Optionsfeld und klicke auf Erstellen.";
$lang_create_embed = "Einbetten";
$lang_create_embed_tag = "Embed Tag";
$lang_create_embed_url = "Embed URL:";
$lang_create_embed_html = "Embed HTML:";
$lang_create_embed_php = "Embed PHP:";

$lang_create_block_move = "Block verschieben";

$lang_create_media_move = "Verschiebe Medien nach";

$lang_create_folder_error        = 'Neuer Ordner kann nicht erstellt werden';
$lang_create_folder_error_exists = 'Neuer Ornder exisitiert bereits';

$lang_create_folder_error_no_base   = 'Kein Basis Ordner gefunden';
$lang_create_folder_error_no_folder = 'Kein Orndernamen eingetragen';

// Delete
$lang_delete = 'Bist Du sicher, dass Du diese Datei löschen möchtest: ';
$lang_del_button = "Löschen";

// Errors
$lang_error_create_ext = 'Ungültige Dateierweiterung.';
$lang_error_file_exists = 'Eine Datei mit diesem Namen in diesem Ordner existiert bereits.';
$lang_error_upload = 'Du musst in einer Galerie sein um ein Bild hochzuladen.';
$lang_no_content = 'Kein Inhalt gefunden.';

//Blog
$lang_blog_title = 'Blog Titel';
$lang_blog_date = 'Datum';
$lang_blog_read_more = 'Weiterlesen';
$lang_blog_back_button = 'Zurück';
$lang_blog_older = 'Ältere Beiträge';
$lang_blog_newer = 'Neuere Beiträge';
$lang_blog_posted_in = 'Veröffentlicht in:';
$lang_blog_error_folder = "Du kannst keine Ordner im $lang_nav_blog erstellen.";
$lang_blog_tool_tip = "Blogbeiträge sind numerisch geordnet, die höhste Nummer ist der neuste Beitrag.";
$lang_blog_import = 'Importieren';
$lang_blog_import_tool_tip = 'Importiere Blog Einträge aus RSS. Der Importer importiert RSS und Atom Formate.';
$lang_blog_import_page_max = 'Maximale Seitenanzahl';
$lang_blog_import_page_var = 'Variable für Paginierung';
$lang_blog_import_url = 'URL';

$lang_blog_description = 'Blog Beschreibung';
$lang_blog_featured_image = 'Blog Ausgewähltes Bild';
$lang_blog_tags = 'Blog Tags (mit Komma getrennt)';
$lang_blog_tags_short = 'Blog Tags';
$lang_blog_url = 'Blog URL';
$lang_blog_index = 'Möchtest Du dies indizieren?';
$lang_blog_nofollow = 'Möchtest Du dies als "no follow?" kennzeichnen?';
$lang_blog_custom = 'Eigene META Beschreibung';
$lang_blog_list = 'Blog-Liste';

//Form
$lang_form_error1 = 'Bitte füllen Sie das Feld aus: ';
$lang_form_error2a = 'Das Feld ';
$lang_form_error2b = ' ist zu lang.';
$lang_form_subject_line = 'Kontakt';
$lang_form_email_sent = 'Deine E-Mail wurde gesendet.';
$lang_form_sent_button = 'Abschicken';
$lang_auto_thank_contact = 'Danke für Deine E-Mail - Wir haben diese empfangen und werden Dir bald antworten.';

$lang_form_error_recapcha = 'reCAPCHA gescheitert';

$lang_form_comment = 'Kommentar';
$lang_form_gdpr    = 'GDPR';
$lang_form_phone   = 'Telefon';
$lang_form_name    = 'Name';
$lang_form_email   = 'E-Mail';

// Mailchimp
$lang_mailchimp_subscribe_label = 'Abonnieren Sie unsere Mailing-Liste';
$lang_mailchimp_email_address   = 'E-Mail-Addresse';
$lang_mailchimp_subscribe       = 'Abonnieren';

//Newsletter Form
$lang_newsletter_thanks ='Danke!';
$lang_newsletter_try_again ='Erneut versuchen';
$lang_newsletter_placeholder ='E-Mail Adresse';
$lang_newsletter_send ='Anmelden';

// Redactor
$lang_redactor_mail_button     = 'Fügt eine E-Mail in einen Text';
$lang_redactor_mail_link_title = 'E-Mail an mich senden';

// Stats
$lang_stats_today = "Besucher";
$lang_stats_refers = "Meiste Referrer:";
$lang_stats_pages = "Beliebteste Seiten:";
$lang_stats_refresh = "Aktualisieren";
$lang_stats_pageviews = "Besuchte Seiten";
$lang_stats_per_visit = "Seiten / Besuch";
$lang_stats_bounce_rate ="Absprungrate";
$lang_stats_online = "Online";
$lang_stats_thisweek = "Diese Woche";
$lang_stats_todays_stats = "Heutige Stats";
$lang_stats_nodata = "Keine Daten";

$lang_stats_browsers  = "Browser";
$lang_stats_countries = "Länder";
$lang_stats_devices   = "Geräte";
$lang_stats_systems   = "Systeme";

// Sweet Alert
$lang_sweetalert_ok    = "OK";
$lang_sweetalert_saved = "Gespeichert";

// Custom post types
$lang_custom_post_type_error_illegal_characters = 'Eigener Eintragstyp enthält unerlaubte Zeichen';
$lang_custom_post_type_error_illegal_name       = 'Eigener Eintragstyp enthält unerlaubten Namen';
$lang_custom_post_type_error_unknown_entry      = 'Dieser eigene Eintragstyp ist unbekannt';

// Status messages
$lang_status_ok = 'Daten gespeichert';

// Dashboard
$lang_dashboard_backups = 'Backups';
$lang_dashboard_blocks = 'Blöcke';
$lang_dashboard_edit_blocks = 'Blöcke editieren';
$lang_dashboard_blog = 'Blog';
$lang_dashboard_edit_blog = 'Blog editieren';
$lang_dashboard_notes = 'Dashboard Notizen';
$lang_dashboard_file_storage = 'Dateispeicher';
$lang_dashboard_media = 'Medien';
$lang_dashboard_edit_media = 'Medien editieren';
$lang_dashboard_pages = 'Seiten';
$lang_dashboard_edit_page = 'Seiten editieren';

// Settings
$lang_settings_title = 'Pulse Einstellungen';
$lang_settings_general = 'Allgemein';
$lang_settings_forms = 'Formulare';
$lang_settings_security = 'Sicherheit';
$lang_settings_permissions = 'Berechtigungen';
$lang_settings_extend = 'Weiteres';

//// Settings: General
$lang_settings_path = 'Pfad';
$lang_settings_path_tooltip = 'Leer lassen, falls im Root Verzeichnis installiert';
$lang_settings_admin = 'Admin';
$lang_settings_admin_tooltip = 'Verzeichnisname des Admin Bereiches';
$lang_settings_password = 'Passwort';
$lang_settings_password_tooltip = 'Etwas, was schwer zu erahnen ist';
$lang_settings_backup_tooltip = 'Automatisches Backup';
$lang_settings_backupemail = 'Backup E-Mail';
$lang_settings_backupemail_tooltip = 'Wo das ZIP Backup hingeschickt werden soll';
$lang_settings_time = 'Standard Zeitzone';
$lang_settings_language = 'Sprache';
$lang_settings_ip = 'IP Anonymisieren';
$lang_settings_frontpage = 'Anzeige auf erster Seite';
$lang_settings_adminfrontpage = 'Anzeige auf erster Admin Seite';
$lang_settings_adminname = 'Admin Benutzername';
$lang_settings_adminname_tooltip = 'Wird als Anzeigename für Blogbeiträge benutzt';
$lang_settings_css = 'CSS Code für gesamte Seite';
$lang_settings_css_tooltip = 'Füge den CSS Code hier ein';
$lang_settings_js = 'JS Code für gesamte Seite';
$lang_settings_js_tooltip = 'Füge den JS Code hier ein';

$lang_settings_home_page = 'Startseite';

//// Settings: Avatar
$lang_settings_avatar_upload = 'Avatar hochladen';

//// Settings: GDPR
$lang_settings_title_gdpr = 'GDPR';
$lang_settings_gdpr_enable_in_form = 'Aktivieren Sie die GDPR im Formular-Tag';

$lang_settings_gdpr_enable_in_tag    = 'Aktivieren Sie GDPR in Tag';
$lang_settings_gdpr_tag_text         = 'GDPR Popup-Text';
$lang_settings_gdpr_tag_text_tooltip = 'GDPR Popup-Text (tooltip)';

//// Settings: Cache
$lang_settings_title_cache = 'Cache';
$lang_settings_cache = 'Frontend Cache einschalten';

//// Settings: Editor
$lang_settings_title_editor = 'Editor';
$lang_settings_wysiwyg = 'WYSIWYG Editor in Blöcken einschalten (ansonsten HTML und Markdown)';
$lang_settings_upload = 'Erlaubte Dateien für den Upload';
$lang_settings_upload_tooltip = 'Benutze Komma und die Dateiendungen zu separieren';
$lang_settings_wysiwygpages = 'WYSIWYG Editor in Seiten einschalten (ansonsten HTML und Markdown)';
$lang_settings_integrate_rapidweaver = 'RapidWeaver integrieren';

//// Settings: Made in Pulse
$lang_settings_title_made_in_pulse = 'Made in Pulse';
$lang_settings_made_in_pulse       = 'Made in Pulse Badge hinzugefügt';
$lang_settings_made_in_pulse_label = 'Aktiviere made-in-pulse Inhalt für Template';

$lang_settings_theme_meta_author_show       = 'Author Metadaten in Theme anzeigen';
$lang_settings_theme_meta_author_show_label = 'Author Metadaten in Theme anzeigen';

//// Settings: Media
$lang_settings_title_media = 'Media';
$lang_settings_jpeg = 'JPEG Qualität';
$lang_settings_jpeg_tooltip = 'Benutze 100 für volle JPEG Qualität (größere Dateien)';
$lang_settings_jpegresample = 'JPEG Überarbeitung "aus"';
$lang_settings_jpegsize = 'JPEG Qualität';
$lang_settings_jpegsize_tooltip = 'Skaliere JPEGs zu einer maximalen Bildgröße (Höhe)';
$lang_settings_thumbheight = 'Höhe des Vorschaubildes';
$lang_settings_thumbheight_tooltip = 'Höhe in px';
$lang_settings_thumb = 'Vorschaubilder generieren';

//// Settings: Navigation
$lang_settings_title_navigation = 'Navigation';
$lang_settings_navigationmenu = 'Frontend Editierung einschalten';
$lang_settings_title_managenavigation = 'Seitennavigation bearbeiten';

//// Settings: Google Analytics
$lang_settings_title_google = 'Google Analytics';
$lang_settings_google = 'Analytics Tracking Code';
$lang_settings_google_tooltip = 'Füge den Analytics Tracking Code hier ein';

//// Settings: GeoIP
$lang_settings_title_geoip = 'GeoIP';
$lang_settings_geoip       = 'GeoIP Daten für Seitenstatistik';
$lang_settings_geoip_label = 'Aktiviere GeoIP für Statistiken hier';

$lang_settings_geoip_api_key         = 'GeoIP bedienung API KEY';
$lang_settings_geoip_api_key_tooltip = 'GeoIP bedienung API KEY';
$lang_settings_geoip_service         = 'GeoIP bedienung';
$lang_settings_geoip_service_tooltip = 'freegeoip, ipstack';

//// Settings: OGP
$lang_settings_title_ogp = 'OGP';
$lang_settings_ogp = 'OGP Standard Bild';
$lang_settings_ogp_tooltip = 'Relativer oder absoluter Link';

$lang_settings_ogp_facebook_admin           = 'Facebook admins';
$lang_settings_ogp_facebook_admin_tooltip   = 'Facebook admins';
$lang_settings_ogp_facebook_id              = 'Facebook app ID';
$lang_settings_ogp_facebook_id_tooltip      = 'Facebook app ID';
$lang_settings_ogp_twitter_creator          = 'Twitter persönliches konto';
$lang_settings_ogp_twitter_creator_tooltip  = 'Twitter persönliches konto';
$lang_settings_ogp_twitter_username         = 'Twitter konto für die Website';
$lang_settings_ogp_twitter_username_tooltip = 'Twitter konto für die Website';

//// Settings: Blog
$lang_settings_title_blog = 'Blog';
$lang_settings_blogresults = 'Resultate pro Seite';
$lang_settings_blogresults_tooltip = 'Blogbeiträge pro Seite';
$lang_settings_blogdisqus = 'Disqus Kommentare einschalten';
$lang_settings_blogdisqususer = 'Disqus Benutzername';
$lang_settings_blogdisqususer_tooltip = 'Füge den Disqus Konto Kurznamen hier ein';
$lang_settings_blogdate = 'Datumsformat';
$lang_settings_blogdate_tooltip = 'PHP Datumsformat. Weitere Informationen: https://php.net/manual/en/function.date.php';
$lang_settings_blog_flag_reverse = 'Reverse-Blog-Liste Reihenfolge'; 
$lang_settings_blogmasonry = 'Blog Masonry Layout einschalten';
$lang_settings_blog_blog_flag_show_link = 'Link zum Blog-Inhalt anzeigen';
$lang_settings_blog_blog_flag_show_teaser_image = 'Vorschaubild anzeigen';

//// Settings: RSS
$lang_settings_title_rss = 'RSS';
$lang_settings_rsstitle = 'RSS Blog Titel';
$lang_settings_rsstitle_tooltip = 'Mein Blog';
$lang_settings_rssdescription = 'RSS Blog Beschreibung';
$lang_settings_rssdescription_tooltip = 'Dies ist mein Blog.';
$lang_settings_rssurl = 'Blog URL';
$lang_settings_rssurl_tooltip = 'http://example.com/blog';
$lang_settings_rsslang = 'Datumsformat';
$lang_settings_rsslang_tooltip = 'en-gb';
$lang_settings_rssurlprefix = 'Blog URL Prefix';
$lang_settings_rssurlprefix_tooltip = '(blog) wird zu blog-1-post-title, auch in htaccess Datei anpassen';

//// Settings: SMTP Settings
$lang_settings_title_smtp = 'SMTP Einstellungen';
$lang_settings_smtpusername = 'SMTP Benutzername';
$lang_settings_smtpusername_tooltip = 'Nur ausfüllen, wenn SMTP benutzt wird';
$lang_settings_smtppassword = 'SMTP Passwort';
$lang_settings_smtppassword_tooltip = 'Passwort';
$lang_settings_smtphost = 'SMTP Host';
$lang_settings_smtphost_tooltip = 'mail.server.com';
$lang_settings_smtpport = 'SMTP Port';
$lang_settings_smtpport_tooltip = '465';

//// Settings: SweetAlert
$lang_settings_title_sweetalert = 'SweetAlert Einstellungen';
$lang_settings_sweetalert_active_tooltip  = 'Benachrichtungen aktivieren';
$lang_settings_sweetalert_active          = 'Aktivieren';
$lang_settings_sweetalert_timeout_tooltip = 'Zeitverzögerung (Millisekunden)';
$lang_settings_sweetalert_timeout         = 'Zeitverzögerung';

//// Settings: Pagination
$lang_settings_title_pagination = 'Seitenumbruch';
$lang_settings_paginationlinks = 'Angezeigte Seitenlinks';
$lang_settings_paginationlinks_tooltip = 'Wird z.B. auf Blocks und Seiten Navigation angezeigt';
$lang_settings_paginationpages = 'Resultate pro Seite';
$lang_settings_paginationpages_tooltip = 'Anzahl angezeigter Seiten pro Link';

//// Settings: Forms
$lang_settings_forminputname = 'Namensfeld';
$lang_settings_forminputname_tooltip = 'Text';
$lang_settings_forminputemail = 'E-Mail Eingabefeld';
$lang_settings_forminputemail_tooltip = 'E-Mail';
$lang_settings_forminputtel = 'Telefon Eingabefeld';
$lang_settings_forminputtel_tooltip = 'Text';

$lang_settings_formnamename = 'Text für Name';
$lang_settings_formnamename_tooltip = 'Name';
$lang_settings_formemailname = 'Text für Email';
$lang_settings_formemailname_tooltip = 'Email';
$lang_settings_formtextarea = 'Höhe Eingabefeld';
$lang_settings_formtextarea_tooltip = 'Anzahl der Reihen im Kommentar Eingabefeld';
$lang_settings_formemail = 'Empfänger Kontaktformular';
$lang_settings_formemail_tooltip = 'Mehere Empfänger mit Komma trennen';
$lang_settings_formsubject = 'Betreffzeile Kontaktformular';
$lang_settings_formsubject_tooltip = 'Du hast eine E-Mail bekommen';
$lang_settings_formthanks = 'Automatische Bestätigung nach Absendung einschalten';
$lang_settings_formredirect = 'Weiterleitung nach Absendung';
$lang_settings_formredirect_tooltip = 'http://deineseite.de/danke';

$lang_settings_formcomment             = 'Text/Label für Kommentare';
$lang_settings_formcommentname_tooltip = 'Kommentar';
$lang_settings_form_gdpr = 'GDPR eingang';
$lang_settings_form_gdpr_name_tooltip = 'GDPR';
$lang_settings_formphone               = 'Text/Label für Telefon';
$lang_settings_formphonename_tooltip   = 'Telefon';

//// Settings: OTP One-Time Password
$lang_settings_title_otp = 'Einmal Passwort Einstellungen (Admin)';
$lang_settings_otpactivate = 'Einmal Passwort einschalten';
$lang_settings_otpsecret = 'Einmal Passwort Geheimnis';
$lang_settings_otpsecret_tooltip = 'Zu bekommen von OTP Mobilapplikationen, wie bspw. Google Authenticator';

//// Settings: reCAPTCHA
$lang_settings_title_recap = 'reCAPTCHA';
$lang_settings_recapkey = 'reCAPTCHA Seitenschlüssel';
$lang_settings_recapkey_tooltip = 'Zu bekommen über Google Konto: https://www.google.com/recaptcha';
$lang_settings_recapkeysecret = 'reCAPTCHA Geheimnis';
$lang_settings_recapkeysecret_tooltip = 'Zu bekommen über Google Konto: https://www.google.com/recaptcha';

//// Settings: Permissions
$lang_settings_title_editor = 'Editor Benutzer';
$lang_settings_editor = 'Editor Benutzer einschalten';
$lang_settings_editorpass = 'Editor Passwort';
$lang_settings_editorpass_tooltip = 'Etwas, was schwer zu erahnen ist';
$lang_settings_editoruser = 'Editor Benutzername';
$lang_settings_editoruser_tooltip = 'Benutzt als Anzeigename für Blogbeiträge';

$lang_settings_title_editorotp = 'Einmal Passwort Einstellungen (Editor)';
$lang_settings_editorotpactivate = 'Einmal Passwort einschalten';
$lang_settings_editorotpsecret = 'Einmal Passwort Geheimnis';
$lang_settings_editorotpsecret_tooltip = 'Zu bekommen von OTP Mobilapplikationen, wie bspw. Google Authenticator';

$lang_settings_title_editoraccess = 'Dem Editor erlauben, auf einige (oder alle) dieser Blöcke zuzugreifen:';
$lang_settings_title_editorpagesaccess = 'Dem Editor erlauben, auf einige (oder alle) dieser Seiten zuzugreifen:';

//// Settings: Extend
$lang_settings_title_themes = 'Themen';
$lang_settings_themeselect = 'Ausgewähltes Theme';
$lang_settings_themeupload = 'Theme ZIP hochladen';

$lang_settings_title_plugins = 'Plugins';
$lang_settings_pluginupload = 'Plugin ZIP hochladen';

$lang_settings_title_customposts = 'Eigene Post Typen';
$lang_settings_managecustomposts = 'Eigene Post Typen pflegen';

$lang_settings_themeuploader = 'Eine neue Theme ZIP Datei hochladen';
$lang_settings_pluginuploader = 'Eine neue Plugin ZIP Datei hochladen';

//// Settings: Media
$lang_settings_mediaupload = 'Eine Mediendatei hochladen';
$lang_settings_upload_max_size = 'Maximale Uploadgröße';
$lang_settings_upload_size_error = 'Datei überschreitet die maximale Uploadgröße';

//// Settings: Navigation
$lang_settings_navigationtitle = 'Die Navigationslinks bearbeiten';
$lang_settings_navigationsubtitle = 'Ziehen und verschieben, um die Liste neu zu ordnen.';
$lang_settings_navigationsubmenu = 'Untermenüpunkt anlegen';

$lang_settings_navigation_non_pulse_page = 'Nicht-Pulse Punkt hinzufügen';
$lang_settings_navigation_non_pulse_name = 'Name';
$lang_settings_navigation_non_pulse_url  = 'URL';

$lang_settings_navigation_activate = 'Aktivieren';

$lang_settings_navigation_add_menu = "Menü hinzufügen";
$lang_settings_navigation_menus = "Menüs";

$lang_settings_title_debug_info  = 'Debuggen';
$lang_settings_manage_debug_info = 'Debuggen';
$lang_settings_manage_log_viewer = 'Eintrags Ansicht';

$lang_settings_title_update  = 'Aktualisieren';
$lang_settings_manage_update = 'Aktualisieren';

//// Settings: Custom Post Type
$lang_settings_custompostentries = 'Eigener Post Typ für:';
$lang_settings_custompostadd = 'Neuen Eintrag hinzufügen';

$lang_settings_title_custompostedit = 'Eigener Post Typ für:';
$lang_settings_custompostback = '< Zurück zur Liste';
$lang_settings_custompostname = 'Name des Post';

$lang_settings_custompostdelete = 'Eigener Post Typ';

$lang_settings_custompostaddentry = 'Eigener Post Typ anlegen für:';

$lang_settings_customposttypes = 'Eigene Post Typen';
$lang_settings_custompostmanage = 'Einträge verwalten';
$lang_settings_custompostmanageedit = 'Editieren';
$lang_settings_custompostmanageadd = 'Einen neuen eigenen Post Typ hinzufügen';

$lang_settings_title_custompostedit_title = 'Einen eigenen Post Typen';
$lang_settings_title_custompostedit_titlein = 'Einen eigenen Post Typen pflegen:';

$lang_settings_custompostdefadd = 'Eigener Post Typ anlegen';
$lang_settings_custompostdeftypename = 'Post Typ Name';
$lang_settings_custompostdefname = 'Name';
$lang_settings_custompostdeftype = 'Typ';
$lang_settings_custompostdeffield = 'Feld';
$lang_settings_custompostcontent = 'Inhalt';

# log viewer
$lang_settings_log_viewer_log_files   = 'Protokolldateien';
$lang_settings_log_viewer_log_content = 'Protokolleinträge'; 

// Tags
$lang_settings_title_tags = 'Tags';
$lang_settings_manage_tags = 'Tags bearbeiten';

$lang_settings_tags_title = 'Bearbeitung der Tags';
$lang_settings_tags_subtitle = 'Hinzufügen / Entfernen von Tags und Beschreibungen.';

$lang_settings_tags_name = 'Name';
$lang_settings_tags_description = 'Beschreibungen';

// Template Strings
$lang_settings_title_template_strings = 'Vorlagentext';

$lang_settings_template_string_admin_login_welcome_tooltip = 'Alles in einem Span-Tag ist hervorgehoben. Strom: Hi! Pulse Benutzer';
$lang_settings_template_string_admin_login_welcome         = 'Login Begrüßungstext';

# User Group List
$lang_settings_title_user_group_list  = 'Benutzergruppenliste';
$lang_settings_manage_user_group_list = 'Benutzergruppenliste verwalten';

$lang_settings_user_group_list_title    = 'Gruppen verwalten';
$lang_settings_user_group_list_subtitle = 'Gruppen hinzufügen / löschen';

$lang_settings_user_group_list_group_name  = 'Gruppenname';
$lang_settings_user_group_list_permissions = 'Zugriffsberechtigungen';

$lang_settings_user_group_list_read       = 'Lesen';
$lang_settings_user_group_list_read_write = 'Lesen Schreiben';

$lang_settings_user_group_list_access_denied = 'Der Zugriff auf diesen Artikel wird verweigert';

// User List
$lang_settings_title_user_list = 'Benutzerliste';
$lang_settings_manage_user_list = 'Benutzerliste verwalten';

$lang_settings_user_list_title = 'Benutzer verwalten';
$lang_settings_user_list_subtitle = 'Benutzer hinzufügen / löschen';

$lang_settings_user_list_acl_role = 'Benutzer-Rolle';
$lang_settings_user_list_otp_activate = 'OTP aktivieren';
$lang_settings_user_list_password = 'Passwort';
$lang_settings_user_list_username = 'Nutzername';

$lang_settings_user_list_error_no_group = 'Bitte fügen Sie dem neuen Benutzer eine Benutzergruppe hinzu';

// Unishop
$lang_settings_unishop_title = 'Pulse Handel';
$lang_settings_unishop_update = 'Verwalten Sie Ihren Shop';
$lang_settings_integrate_ecommerce = 'Handel integrieren';

// Search
$lang_search_title = 'Suche';
$lang_search_placeholder = 'Suchbegriff';
$lang_search_cta = 'Suche';
$lang_search_noresults = 'Keine Ergebnisse gefunden';
$lang_search_results = 'Suchergebnisse';
$lang_search_links = 'Link zu';

// Page List
$lang_pagelist = 'Seitenliste';

// Admin: Debug Info
$lang_debug_info_title     = 'Debuggen';
$lang_debug_info_path      = 'Pfad';
$lang_debug_info_title_sub = 'Dateiberechtigungen';
$lang_debug_info_button    = 'Herunterladen';
$lang_debug_info_text      = 'Zip-Datei herunterladen';

//Admin: Open
$lang_open_meta_draft_mode = 'Entwurfsmodus';
$lang_open_meta_searchable = 'In Suche anzeigen';

// Admin: Update
$lang_update_title     = 'Aktualisiere Deine Pulse-Installation';
$lang_update_title_sub = 'Lade die neue Pulse-Zip-Datei hoch';
$lang_update_button    = 'Aktualisieren';

# Plugin & Tags Page
$lang_plugins_tags = (object)[
	'menu' => 'Plugins helfen',
	'page' => (object)[
		'title' => 'Installierte Plugins',
		'plugin_title' => 'Plugins',
		'tag_title' => 'Stichworte',
		'default_description' => 'No information available for this item',
		'plugins' => (object)[
			'drop'           => 'Drag and drop plugin',
			'unishop'        => 'Store',
			'unishop_editor' => 'Edit Store data',
			'disqus'         => 'Commenting',
			'ogp'            => 'Social META Data',
			'parsedown'      => 'Markdown parser'
		],
		
		'tags' => (object)[
			'at' => 'Hide mail addresses (Redactor)',
			'block' => 'Show a block - {{block}}',
			'block_loop' => 'Show all blocks in a folder',
			'blog' => 'Show a blog - {{blog}}',
			'blog-content-loop' => 'Create your Blog layout - {{blog}} {{featured-image}} {{blog-content-loop}} {{blog-item-author}} {{blog-item-date}} {{blog-item-featured-image}} {{blog-item-title}} {{blog-item-content}} {{/blog-content-loop}} {{/blog}}',
			'blog-item-author' => 'Blog item author block',
			'blog-item-content' => 'Blog item content block',
			'blog-item-date' => 'Blog item date block',
			'blog-item-featured_image' => 'Blog item featured image',
			'blog-item-tag' => 'Blog item tags',
			'blog-item-title' => 'Blog item title block',
			'blog-list' => 'List Blog posts - {{blog-list}}',
			'blog-show' => 'Arrange Blog items in detail - {{blog-show}}',
			'blog-tags' => 'Show blog tags - {{blog-tags}}',
			'breadcrumb' => 'Show site breadcrumbs - {{breadcrumb}}',
			'cookieconsent' => 'Show consent to track cookies - {{cookieconsent:#000:#f1d600:edgeless:bottom:www.pulsecms.com}}',
			'custom_post_type' => 'Show a custom post type object - {{custom_post_type:book/hercules}}',
			'domain' => 'Show the current domain. Useful for links - {{domain}}',
			'dropzone' => 'Add a dropzone upload handler area - {{dropzone:media/gallery1}}',
			'email-list' => 'Collect emails - {{email-list}}',
			'endpoint' => 'Create a link to a block (Block embed option)',
			'featured-image' => 'Show featured image for a blog post',
			'form' => 'Contact form - {{form}}',
			'gal' => 'Gallery tag - {{gal:galname}} or {{gal:gallery1:5:yes}}',
			'gdpr' => 'Show GDPR tracking consent - {{gdpr:additional text}}',
			'googlemaps' => 'Google maps tag - {{googlemaps:address=brooklyn children museum-new york-usa,width=600,height=300,zoom=12}}',
			'justforms' => 'Just forms - {{justforms:formid:height}}',
			'link' => 'Directly lnk to a blog/page - {{link:page/animal/hippo}}    {{link:blog/1}}',
			'localizer' => 'Locale (translation) aware Blocks - {{localizer:block}}',
			'localizer_init' => 'Save locale in session',
			'mailchimp' => 'Email form via MailChimp API - {{mailchimp:user:formid}}',
			'masonry' => 'Gallery tag using masonry layout - {{masonry:galname}}',
			'media_player' => 'Show a media player for audio/video media - {{media_player://domain.com/content/media/CheersThemeTune.mp3:audio/mp3:audio}}    {{media_player://domain.com/content/media/rotate_set.mov:video/mp4:video:400:300}}',
			'navigation' => 'Navigation bar (Settings)',
			'navigation_logged_in' => 'Navigation bar for logged in users (Settings)',
			'ogp' => 'OGP - make sure to add the tag in the Template file',
			'page_list' => 'Show a list of pages - {{page_list}}',
			'paypal' => 'Paypal integration - {{paypal:email@domain.com:USD:site.com/success:site.com/cancel:Buy with:20:Polo Shirt}}',
			'picture' => 'Show an image from the media folder',
			'policy' => 'Show the privacy policy - {{policy:company:location:date}}',
			'recentposts' => 'Show blog recent posts - {{recentposts:"10":"blog/another"}}',
			'recentposts_visual' => 'Show blog recent posts with embedded images - {{recentposts_visual:"limit":"location":"no_date":"limit text"}}',
			'sb_block' => 'Allow code in a Block -  {{sb_block:name}}',
			'sb_localizer' => 'Locale specific SuperBlock - {{sb_localizer}}',
			'sb_login' => 'Control access to a page - {{sb_login:password:sharedsecret:blockname:errormessage}}',
			'search' => 'Show search form and data - {{search}}',
			'show_var' => 'Show a link path - {{show_var:path}} e.g. {{show_var:path}}/privacy as the link to your Privacy page',
			'slide' => 'Show a gallery as a slide show - {{slide:galname}}',
			'social' => 'Social share buttons - {{social}}',
			'stripe' => 'Stripe API integration - {{stripe:pk_live123456789:sku_123456789:site.com/success:site.com/cancel:Buy Now}} ',
			'social_exposure' => 'Show social media META images - place in media/opengraph directory',
			'teaser_image' => 'Show a blog teaser image - option in Settings',
			'theme_css' => 'Show page CSS - option in Settings',
			'theme_js' => 'Show page JS - option in Settings',
			'theme_js_body' => 'Show page JS (in body) - option in Settings',
			'thumbs' => 'Show media thumbnails - {{thumbs:galname}}',
			'unishop' => 'Display Store info - {{unishop:"test@this.that":"USD":"$":"US":"0":"/paypal_ok":"/paypal_cancel"}}'
		]
	]
];