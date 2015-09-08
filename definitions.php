<?php
/*
 * Copyright 2015 © János Szentgyörgyi
 * Github:
 * EsoTalk translate
 */

ET::$languageInfo["Hungarian"] = array(
	"locale" => "hu-HU",
	"name" => "Magyar",
	"description" => "Általános magyar nyelvi csomag",
	"version" => ESOTALK_VERSION,
	"author" => "János Szentgyörgyi",
	"authorEmail" => "puttocska@gmail.com",
	"authorURL" => "http://dynamicart.hu",
	"license" => "GPLv2"
);

// Define the character set that this language uses.
$definitions["charset"] = "utf-8";

$definitions["date.full"] = "%c";

$definitions["%d day ago"] = "tegnap";
$definitions["%d days ago"] = "%d napja";
$definitions["%d hour ago"] = "1 órája";
$definitions["%d hours ago"] = "%d órája";
$definitions["%d minute ago"] = "1 perce";
$definitions["%d minutes ago"] = "%d perce";
$definitions["%d month ago"] = "1 hónapja";
$definitions["%d months ago"] = "%d hónapja";
$definitions["%d second ago"] = "1 másodperce";
$definitions["%d seconds ago"] = "%d másodperce";
$definitions["%d week ago"] = "múlt héten";
$definitions["%d weeks ago"] = "%d hete";
$definitions["%d year ago"] = "múlt évben";
$definitions["%d years ago"] = "%d éve";

$definitions["%s and %s"] = "%s és %s";
$definitions["%s can view this conversation."] = "%s láthatja ezt a beszélgetést.";
$definitions["%s changed %s's group to %s."] = "%s megváltoztatta a %s csoportot erre: %s .";
$definitions["%s changed your group to %s."] = "%s megváltoztatta a csoportodat erre: %s.";
$definitions["%s conversation"] = "%s beszélgetés";
$definitions["%s conversations"] = "%s beszélgetés";
$definitions["%s has registered and is awaiting approval."] = "%s fő regisztrált és vár elfogadásra.";
$definitions["%s invited you to %s."] = "%s meginvitált ide: %s.";
$definitions["%s joined the forum."] = "%s csatlakozott a fórumhoz.";
$definitions["%s mentioned you in %s."] = "%s megemlített itt: %s.";
$definitions["%s post"] = "%s bejegyzés";
$definitions["%s posted %s"] = "%s bejegyezte %s";
$definitions["%s posted in %s."] = "%s beküldött ide: %s.";
$definitions["%s posts"] = "%s bejegyzés";
$definitions["%s reply"] = "%s válasz";
$definitions["%s replies"] = "%s válasz";
$definitions["%s Settings"] = "%s Beállítás";
$definitions["%s started the conversation %s."] = "%s beszélgetést kezdeményezett itt: %s.";
$definitions["%s will be able to view this conversation."] = "%s láthatja a beszélgetést.";
$definitions["%s will be able to:"] = "%s láthatja ezeket:";

$definitions["A new version of esoTalk (%s) is available."] = "Az esoTalk új verziója (%s) érhető el.";
$definitions["a private conversation"] = "privát beszélgetés";
$definitions["Automatically follow conversations that I reply to"] = "A beszélgetés automatikus követése ha hozzászóltam.";
$definitions["Automatically follow private conversations that I'm added to"] = "A privát beszélgetés automatikus követése ha hozzáadtak.";
$definitions["Access the administrator control panel."] = "Hozzáférés az Admin beállításokhoz.";
$definitions["Account type"] = "Fiók típusa";
$definitions["Activate"] = "Aktivál";
$definitions["Activity"] = "Aktivitás";
$definitions["Add"] = "Hozzáad";
$definitions["Administration"] = "Adminisztráció";
$definitions["Administrator email"] = "Admin email";
$definitions["Administrator password"] = "Admin jelszó";
$definitions["Administrator username"] = "Admin neve";
$definitions["Advanced options"] = "További opciók";
$definitions["All Channels"] = "Minden csatorna";
$definitions["Allow members to edit their own posts:"] = "Meddig szerkesztheti a hozzászólását a felhasználó:";
$definitions["Already have an account? <a href='%s' class='link-login'>Log in!</a>"] = "Már van fiókod? <a href='%s' class='link-login'>Bejelentkezés!</a>";
$definitions["Appearance"] = "Megjelenés";
$definitions["Approve"] = "Jóváhagyás";
$definitions["Automatically star conversations that I reply to"] = "A beszélgetések követése, melyekhez hozzászóltam.";
$definitions["Avatar"] = "Profilkép";

$definitions["Back to channels"] = "Vissza a csatornához";
$definitions["Back to conversation"] = "Vissza a beszélgetéshez";
$definitions["Back to member"] = "Vissza a taghoz";
$definitions["Back to members"] = "Vissza a tagokhoz";
$definitions["Back to search"] = "Vissza a kereséshez";
$definitions["Background color"] = "Háttérszín";
$definitions["Background image"] = "Háttérkép";
$definitions["Base URL"] = "Alap URL";
$definitions["Bold"] = "Vastag";
$definitions["By %s"] = "%s által";

$definitions["Can suspend/unsuspend members"] = "Felfüggesztheti a tagokat";
$definitions["Cancel"] = "Mégsem";
$definitions["Change"] = "Szerkeszt";
$definitions["Change %s's Permissions"] = "%s engedélyeinek változtatása";
$definitions["Change avatar"] = "Profilkép csere";
$definitions["Change Channel"] = "Csatorna csere";
$definitions["Change channel"] = "Csatorna csere";
$definitions["Change username"] = "név csere";
$definitions["Change Password or Email"] = "Jelszó vagy email cseréje";
$definitions["Change Password"] = "Jelszó csere";
$definitions["Change password"] = "jelszó csere";
$definitions["Change permissions"] = "Engedélyek változtatása";
$definitions["Channel description"] = "Csatorna leírása";
$definitions["Channel List"] = "Csatorna lista";
$definitions["Channel title"] = "Csatorna neve";
$definitions["Channel slug"] = "Csatorna alias";
$definitions["Channels"] = "Csatornák";
$definitions["Choose a secure password of at least %s characters"] = "Válassz egy legalább %s betűből álló titkos jelszót.";
$definitions["Choose what people will see when they first visit your forum."] = "Válaszd ki, mit lásson aki először lép a fórumra.";
$definitions["Click on a member's name to remove them."] = "Az eltávolításhoz kattints a felhasználó nevére.";
$definitions["Close registration"] = "Zárt regisztráció";
$definitions["Confirm password"] = "Jelszó mégegyszer";
$definitions["Controls"] = "Lehetőségek";
$definitions["Conversation"] = "Beszélgetés";
$definitions["Conversations participated in"] = "Beszélgetések melyben részt veszel";
$definitions["Conversations started"] = "Kezdett beszélgetések";
$definitions["Conversations"] = "Beszélgetések";
$definitions["Copy permissions from"] = "Engedélyek másolása innen";
$definitions["Create Channel"] = "Új csatorna";
$definitions["Create Group"] = "Új csoport";
$definitions["Create Member"] = "Új felhasználó";
$definitions["Customize how users can become members of your forum."] = "Állítsd be, hogyan lehet valaki tagja a fórumodnak.";
$definitions["Customize your forum's appearance"] = "Állítsd be a fórumod megjelenését";

$definitions["Dashboard"] = "Irányítópult";
$definitions["Default forum language"] = "A fórum nyelvezete";
$definitions["<strong>Delete</strong> all conversations forever."] = "<strong>Törlöd</strong> a beszélgetéseket visszavonhatatlanul.";
$definitions["Delete Channel"] = "Csatorna törlése";
$definitions["Delete conversation"] = "Beszélgetés törlése";
$definitions["Delete member"] = "felhasználó törlése";
$definitions["Delete Member"] = "Felhasználó törlése";
$definitions["<strong>Delete this member's posts.</strong> All of this member's posts will be marked as deleted, but will be able to be restored manually."] =
	"<strong>A felhasználó bejegyzéseinek törlése.</strong> A felhasználó minden bejegyzése törölre lesz állítva, de manuálisan vissza lehet állítani.";
$definitions["Delete"] = "Törlés";
$definitions["Deleted %s by %s"] = "%s Törölve %s által";
$definitions["Deny"] = "Megtagadva";
$definitions["Disable"] = "Tiltva";
$definitions["Discard"] = "Eldobva";
$definitions["Don't allow other users to see when I am online"] = "Mások nem láthatják, hogy online vagyok.";
$definitions["Don't have an account? <a href='%s' class='link-join'>Sign up!</a>"] = "Nincs még fiókod? <a href='%s' class='link-join'>Regisztrálás!</a>";
$definitions["Don't repeat"] = "Don't repeat";
$definitions["Don't require users to confirm their account"] = "Nem kell megerősíteni a regisztrációt";

$definitions["Edit Channel"] = "Csatorna módosítása";
$definitions["Edit Group"] = "Csoport módosítása";
$definitions["Edit member groups"] = "Edit member groups";
$definitions["Edit your profile"] = "Profil szerkesztése";
$definitions["Edit"] = "Szerkesztés";
$definitions["Edited %s by %s"] = "%s szerkesztve %s által";
$definitions["Editing permissions"] = "Engedélyek szerkesztése";
$definitions["Email me when I'm added to a private conversation"] = "Kérek e-mail-t ha felvesznek egy privát beszélgetésbe.";
$definitions["Email me when someone mentions me in a post"] = "Kérek e-mail-t ha megemlítenek egy beszélgetésben.";
$definitions["Email me when someone posts in a channel I have followed"] = "Kérek e-mail-t ha valaki egy követett csatornában hozzászól.";
$definitions["Email me when someone posts in a conversation I have followed"] = "Kérek e-mail-t ha valaki egy követett beszélgetéshez hozzászól";
$definitions["Email me when there is a new post by a member I have followed"] = "Kérek e-mail-t ha akit követek új bejegyzést csinál.";
$definitions["Email"] = "Email";
$definitions["Enable"] = "Engedélyez";
$definitions["Enabled"] = "Engedélyezve";
$definitions["Enter a conversation title"] = "Írd be a beszélgetés címét";
$definitions["Error"] = "Hiba";
$definitions["esoTalk version"] = "esoTalk verzió";
$definitions["Everyone"] = "Mindenki";

$definitions["Fatal Error"] = "Valami nem sikerült";
$definitions["Feed"] = "Feed";
$definitions["Filter by name or group..."] = "név vagy csoport szűrése...";
$definitions["Find this post"] = "Bejegyzés keresése";
$definitions["First posted"] = "Első hozzászóló ként";
$definitions["Follow"] = "Követés";
$definitions["Follow to receive notifications"] = "Follow to receive notifications";
$definitions["Following"] = "Követve";
$definitions["For %s seconds"] = "%s másodpercig";
$definitions["Forever"] = "Örökké";
$definitions["Forgot?"] = "Elfelejtette?";
$definitions["Forgot Password"] = "Elfelejtett jelszó";
$definitions["Forum"] = "Fórum";
$definitions["Forum header"] = "Fórum fejléc";
$definitions["Forum language"] = "Fórum nyelve";
$definitions["Forum privacy"] = "Fórum adatkezelése";
$definitions["Forum Settings"] = "Fórum beállítások";
$definitions["Forum Statistics"] = "Fórum statisztikák";
$definitions["Forum title"] = "Fórum címe";
$definitions["forumDescription"] = "%s is a web-forum discussing %s, and %s.";

$definitions["Give this group the 'moderate' permission on all existing channels"] = "Give this group the 'moderate' permission on all existing channels";
$definitions["Global permissions"] = "Globális engedélyek";
$definitions["Go to top"] = "Ugrás fel";
$definitions["Group name"] = "Csoport neve";
$definitions["group.administrator"] = "Admin";
$definitions["group.administrator.plural"] = "Adminok";
$definitions["group.guest"] = "Vendég";
$definitions["group.guest.plural"] = "Vendégek";
$definitions["group.member"] = "Tag";
$definitions["group.member.plural"] = "Tagok";
$definitions["group.Moderator"] = "Moderátor";
$definitions["group.Moderator.plural"] = "Moderátorok";
$definitions["group.suspended"] = "Felfüggesztett";
$definitions["Groups can be used to categorize members and give them certain privileges."] = "Csoportok, melyek kezelhetik a felhasználókat és adhatnak jogokat.";
$definitions["Groups"] = "Csoportok";
$definitions["Guests can view the:"] = "A vendégek ezeket láthatják:";

$definitions["Header"] = "Fejléc";
$definitions["Header color"] = "Fejléc színe";
$definitions["Heads Up!"] = "Fel a fejjel!";
$definitions["Hide"] = "Elrejt";
$definitions["Home page"] = "Honlap";
$definitions["HTML is allowed."] = "HTML engedélyezve.";

$definitions["If you run into any other problems or just want some help with the installation, feel free to ask for assistance at the <a href='%s'>esoTalk support forum</a>."]
	= "Ha valami problémád adódott, vagy segítséget kérnél a telepítésben, kérdezd bátran az <a href='%s'>esoTalk csapatot</a>.";
$definitions["Ignore conversation"] = "Mellőzés";
$definitions["Install esoTalk"] = "esoTalk telepítése";
$definitions["Install My Forum"] = "Fórum telepítése";
$definitions["Installed Languages"] = "Telepített nyelv";
$definitions["Installed Plugins"] = "Telepített bővítmények";
$definitions["Installed plugins"] = "Telepített bővítmények";
$definitions["Installed Skins"] = "Telepített témák";
$definitions["Installed skins"] = "Telepített témák";
$definitions["is %s"] = "is %s";

$definitions["Joined"] = "Csatlakozva";
$definitions["just now"] = "épp most";

$definitions["Keep me logged in"] = "Legyek bejelentkezve";
$definitions["<strong>Keep this member's posts.</strong> All of this member's posts will remain intact, but will show [deleted] as the author."]
	= "<strong>Keep this member's posts.</strong> All of this member's posts will remain intact, but will show [deleted] as the author.";

$definitions["label.draft"] = "Piszkozat";
$definitions["label.locked"] = "Lezárt";
$definitions["label.ignored"] = "Kihagyva";
$definitions["label.private"] = "Privát";
$definitions["label.sticky"] = "Rögzítés";
$definitions["Labels"] = "Cimkék";
$definitions["Last active"] = "Aktivitás";
$definitions["Last active %s"] = "Aktív %s";
$definitions["Latest"] = "Friss";
$definitions["Latest News"] = "Friss hírek";
$definitions["Loading..."] = "Betöltés...";
$definitions["Lock"] = "Zárolás";
$definitions["Log In"] = "Bejelentkezés";
$definitions["Log Out"] = "Kijelentkezés";

$definitions["Make member and online list visible to:"] = "Make member and online list visible to:";
$definitions["Manage Channels"] = "Csatornák kezelése";
$definitions["Manage Groups"] = "Csoportok kezelése";
$definitions["Manage Languages"] = "Nyelvek kezelése";
$definitions["Manage your forum's channels (categories)"] = "A fórum csatornáinak kezelése (kategóriák)";
$definitions["Mark as read"] = "Jelöld olvasottra";
$definitions["Mark as unread"] = "Jelöld olvasatlanra";
$definitions["Mark all as read"] = "Jelöld mind olvasottra";
$definitions["Mark listed as read"] = "Jelöld a láthatókat olvasottra";
$definitions["Maximum size of %s. %s."] = "Maximum mérete %s. %s.";
$definitions["Member groups"] = "Tagok csoportja";
$definitions["Member list"] = "tagok listája";
$definitions["Member List"] = "Tagok listája";
$definitions["Member privacy"] = "Member privacy";
$definitions["Members"] = "Tagok";
$definitions["Members Allowed to View this Conversation"] = "Tagok akik láthatják ezt a beszélgetést";
$definitions["Members Awaiting Approval"] = "Elbírálásra váró tagok";
$definitions["Members Online"] = "Online tagok";
$definitions["Members who are part of this group can be listed by searching for the group name in the member list."]
	= "E csoport tagjai láthatóak a keresésnél, ha a csoport nevére keresnek.";
$definitions["Mobile skin"] = "Mobil téma";
$definitions["Moderate"] = "Moderálás";
$definitions["<strong>Move</strong> conversations to the following channel:"]
	= "A beszélgetés <strong>áthelyezése</strong> ebbe a csatornába:";
$definitions["Mute conversation"] = "Beszélgetés némítása";
$definitions["MySQL database"] = "MySQL adatbázis";
$definitions["MySQL host address"] = "MySQL szerver címe";
$definitions["MySQL password"] = "MySQL jelszó";
$definitions["MySQL queries"] = "MySQL kérések";
$definitions["MySQL table prefix"] = "MySQL tábla prefixum";
$definitions["MySQL username"] = "MySQL felhasználó";
$definitions["MySQL version"] = "MySQL verzió";

$definitions["Name"] = "Név";
$definitions["never"] = "soha";
$definitions["%s new"] = "%s új";
$definitions["New conversation"] = "Új beszélgetés";
$definitions["New Conversation"] = "Új Beszélgetés";
$definitions["New conversations in the past week"] = "Új beszélgetések a múlt héten";
$definitions["New email"] = "Új email";
$definitions["New members in the past week"] = "Új tagok a múlt héten";
$definitions["New password"] = "Új jelszó";
$definitions["New posts in the past week"] = "Új bejegyzések a múlt héten";
$definitions["New username"] = "Új felhasználónév";
$definitions["Next Step"] = "Következő lépés";
$definitions["Next"] = "Következő";
$definitions["No preview"] = "Nincs előnézet";
$definitions["No"] = "Nem";
$definitions["Notifications"] = "Események";
$definitions["Now"] = "Most";

$definitions["OK"] = "OK";
$definitions["Online"] = "Online";
$definitions["online"] = "online";
$definitions["Only allow members of this group to see who else is in it"] = "Only allow members of this group to see who else is in it";
$definitions["Open registration"] = "Nyilt regisztráció";
$definitions["optional"] = "opcionális";
$definitions["Order By:"] = "Rendezve:";
$definitions["Original Post"] = "Eredeti bejegyzés";

$definitions["Page Not Found"] = "Az oldal nem található";
$definitions["Password"] = "Jelszó";
$definitions["PHP version"] = "PHP verzió";
$definitions["Plugins"] = "Bővítmények";
$definitions["Post a Reply"] = "Válasz küldése";
$definitions["Post count"] = "Bejegyzés száma";
$definitions["Posts"] = "Bejegyzés";
$definitions["Powered by"] = "Támogatja: ";
$definitions["Preview"] = "Előnézet";
$definitions["Previous"] = "Előző";
$definitions["Primary color"] = "Elsődleges szín";
$definitions["Privacy"] = "Adatvédelem";

$definitions["Quote"] = "Idézet";
$definitions["quote"] = "idézet";

$definitions["Read more"] = "Tovább";
$definitions["Recent posts"] = "Aktuális bejegyzések";
$definitions["Recover Password"] = "Jelszó helyreállítás";
$definitions["Registered members"] = "Regisztrált tagok";
$definitions["Registration"] = "Regisztráció";
$definitions["Registration Closed"] = "A regisztráció zárva";
$definitions["Remove avatar"] = "Profilkép törlése";
$definitions["Rename Member"] = "Felhasználó átnevezése";
$definitions["Reply"] = "Válasz";
$definitions["Report a bug"] = "Hiba bejelentés";
$definitions["Require administrator approval"] = "Adminisztrátori jogok kellenek";
$definitions["Require users to confirm their email address"] = "Meg kell erősíteni az email címet";
$definitions["Restore"] = "Visszaállítás";
$definitions["restore"] = "visszaállítás";
$definitions["Reset"] = "Eredeti érték";

$definitions["Save Changes"] = "Változások mentése";
$definitions["Save Draft"] = "Piszkozat mentése";
$definitions["Search conversations..."] = "Beszélgetés keresése...";
$definitions["Search within this conversation..."] = "Keresés a beszélgetésben...";
$definitions["Search"] = "Keresés";
$definitions["See the private conversations I've had with %s"] = "Privát beszélgetés megtekintése vele: %s";
$definitions["Set a New Password"] = "Új jelszó beállítása";
$definitions["Settings"] = "Beállítások";
$definitions["Show an image in the header"] = "Mutass egy képet a fejlécben";
$definitions["Show in context"] = "Mutasd a környezetet";
$definitions["Show matching posts"] = "Mutasd az egyező bejegyzéseket";
$definitions["Show the channel list by default"] = "Mutasd a csatorna listát alapértelmezettként";
$definitions["Show the conversation list by default"] = "Mutasd a beszélgetések listát alapértelmezettként";
$definitions["Show the forum title in the header"] = "Mutasd a fórum címét a fejlécben";
$definitions["Sign Up"] = "Regisztráció";
$definitions["Skins"] = "Témák";
$definitions["Sort By"] = "Rendezés: ";
$definitions["Specify Setup Information"] = "Beállítási információk megadása";
$definitions["Star to receive notifications"] = "Kövesd a kapott értesítéseket";
$definitions["Starred"] = "Követés";
$definitions["Start"] = "Nyitás";
$definitions["Start a conversation"] = "Beszélgetés nyitása";
$definitions["Start a new conversation"] = "Új beszélgetés";
$definitions["Start a private conversation with %s"] = "Privát beszélgetés kezdeményezése vele: %s";
$definitions["Start Conversation"] = "Beszélgetés megkezdése";
$definitions["Starting a conversation"] = "Beszélgetés elkezdése";
$definitions["Statistics"] = "Statisztika";
$definitions["statistic.conversation.plural"] = "%s beszélgetés";
$definitions["statistic.conversation"] = "%s beszélgetés";
$definitions["statistic.member.plural"] = "%s tag";
$definitions["statistic.member"] = "%s tag";
$definitions["statistic.online.plural"] = "%s online";
$definitions["statistic.online"] = "%s online";
$definitions["statistic.post.plural"] = "%s bejegyzés";
$definitions["statistic.post"] = "%s bejegyzés";
$definitions["Sticky"] = "Rögzítve";
$definitions["Subscribe"] = "Feliratkozás";
$definitions["Subscribed"] = "Feliratkozva";
$definitions["Subscription"] = "Feliratkozás";
$definitions["Success!"] = "Sikeres!";
$definitions["Suspend member"] = "Suspend member";
$definitions["Suspend members."] = "Suspend members.";
$definitions["Suspend"] = "Felfüggesztés";

$definitions["To get started with your forum, you might like to:"] = "To get started with your forum, you might like to:";

$definitions["Unapproved"] = "Nem elfogadott";
$definitions["Unhide"] = "Nincs elrejtve";
$definitions["Unignore conversation"] = "Mellőzés feloldása";
$definitions["Uninstall"] = "Eltávolítás";
$definitions["Unlock"] = "Zárolás feloldása";
$definitions["Unmute conversation"] = "Beszélgetés némításának feloldása";
$definitions["Unstarred"] = "Ne kövesd";
$definitions["Unsticky"] = "Rögzítés feloldása";
$definitions["Unsubscribe new users by default"] = "Az új felhasználók leiratkoztatása alapesetben";
$definitions["Unsubscribe"] = "Leiratkozás";
$definitions["Unsubscribed"] = "Leiratkozva";
$definitions["Unsuspend member"] = "Tag újra aktiválása";
$definitions["Unsuspend"] = "Felfüggesztés megszüntetése";
$definitions["Until someone replies"] = "Amíg valaki válaszol";
$definitions["Untitled conversation"] = "Névtelen beszélgetés";
$definitions["Upgrade esoTalk"] = "esoTalk frissítése";
$definitions["Use a background image"] = "Háttérkép használata";
$definitions["Use for mobile"] = "Mobilhoz is használható";
$definitions["Use friendly URLs"] = "Barátságos URL-k használata";
$definitions["Used to verify your account and subscribe to conversations"] = "Used to verify your account and subscribe to conversations";
$definitions["Username"] = "Felhasználónév";
$definitions["Username or Email"] = "Felhasználónév vagy email";

$definitions["View %s's profile"] = "%s profiljának megtekintése";
$definitions["View all notifications"] = "Minden értesítés megtekintése";
$definitions["View more"] = "Mutass többet";
$definitions["View your profile"] = "Profilod megtekintése";
$definitions["View"] = "Megtekintés";
$definitions["Viewing: %s"] = "Megtekintés: %s";
$definitions["viewingPosts"] = "<b>%s-%s</b> a %s bejegyzésből";

$definitions["Warning"] = "Figyelem";
$definitions["Welcome to esoTalk!"] = "Üdv az esoTalk-nál!";
$definitions["We've logged you in and taken you straight to your forum's administration panel. You're welcome."]
	= "Beléptettünk és most megmutatjuk neked a fórum admin paneljét. Üdvözlünk itt.";
$definitions["Write a reply..."] = "Válasz írása...";

$definitions["Yes"] = "Igen";
$definitions["You can manage channel-specific permissions on the channels page."] = "A csatornákkal kapcsolatos engedélyeket a csatornák oldalon találod.";
$definitions["Your current password"] = "Jelenlegi jelszavad";


// Messages.
$definitions["message.404"]
	= "Te jó ég - a kért oldal nem található! Lépj egy oldalt vissza és próbálj egy másik linkre kattintani, vagy másik címet beírni.";
$definitions["message.accountNotYetApproved"]
	= "Az admin még nem fogadta el a fiókodat, kérjük légy türelemmel!";
$definitions["message.ajaxDisconnected"]
	= "Nem tudunk kapcsoldni a szerverhez. Várj pár másodpercet és <a href='javascript:jQuery.ETAjax.resumeAfterDisconnection()'>próbáld újra</a>, vagy <a href='' onclick='window.location.reload();return false'>frissítsd az oldalt</a>.";
$definitions["message.ajaxRequestPending"]
	= "A kérésed még folyamatban van! Ha kilépsz, vagy elnavigálsz erről az oldalról, a kérésed nem biztos, hogy befejeződik, a változásaid nem biztos, hogy el lesznek mentve.";
$definitions["message.avatarError"]
	= "A profilképed feltöltésekor hiba merült fel. Győződj meg róla, hogy a megfelelő képformátumot használod (mint pl.: .jpg, .png, .gif) és a kép nem hatalmas méretű.";
$definitions["message.cannotDeleteLastChannel"]
	= "Várj egy picit, nem törölheted az utolsó csatornát! Hová lesznek a beszélgetéseid? Butaság lenne.";
$definitions["message.cannotEditSinceReply"]
	= "Nem szerkesztheted a bejegyzésed, mert már valaki válaszolt rá.";
$definitions["message.changesSaved"]
	= "A változásaid mentve lettek.";
$definitions["message.channelsHelp"]
	= "Használd a csatornákat a beszélgetések rendezésére. Készíts annyi csatornát amennyire szükséged van, sorrendezd, csoportosítsd kedvedre, fogd és vidd módszerrel.";
$definitions["message.channelSlugTaken"]
	= "Ez az alias már használva van egy másik csatorna által.";
$definitions["message.confirmDelete"]
	= "Tényleg törölni szeretnéd ezt? Komolyan, nem lehet vissza állítani.";
$definitions["message.confirmDiscardPost"]
	= "Nem mentetted a bejegyzésed piszkozatként. Biztos eldobod?";
$definitions["message.confirmEmail"]
	= "Mielőtt az új profilodat használnád, meg kell erősítened az email címedet. A következő 1-2 percben kapsz tőlünk egy levelet, amelyben a megerősítő linkre kellene kattintanod.";
$definitions["message.confirmLeave"]
	= "Huh, nem mentetted el amit módosítottál! Ha bezárod ezt az oldalt, elveszíted amit írtál. Rendben?";
$definitions["message.connectionError"]
	= "esoTalk nem tud csatlakozni a MySQL-hez. A hiba:<br/>%s";
$definitions["message.conversationDeleted"]
	= "A beszélgetés törölve.";
$definitions["message.conversationNotFound"]
	= "Egyéb okokból ezt a bejegyzést nem tekintheted meg. Vagy nem létezik, vagy nincs jogod megtekinteni.";
$definitions["message.cookieAuthenticationTheft"]
	= "Biztonsági okokból, nem tudjuk tárolni a sütiket, így nem tudtunk bejelentkeztetni. Lépj be újra!";
$definitions["message.deleteChannelHelp"]
	= "Huhh, várj egy picit! Ha törlöd ezt a csatornát, nem fogod tudni visszaállítani. Hacsak nem csinálsz egy időgépet. De, szóval, nem lenne <em>könnyű</em> visszaállítani. Minden beszélgetést ebből a csatornából átrakhatunk egy másikba.";
$definitions["message.emailConfirmed"]
	= "Királyság! A fiókod hitelesítve lett, most már kezdhetsz beszélgetni másokkal. Miért is ne <a href='".URL("conversation/start")."'>kezdenéd el</a>?";
$definitions["message.emailDoesntExist"]
	= "Ilyen email cím nincs az adatbázisunkban. Nem írtad el?";
$definitions["message.emailNotYetConfirmed"]
	= "Meg kell erősítened az email címedet mielőtt belépnél vele! Ha nem kaptál megerősítő email-t, kérjük ellenőrizd a SPAM mappádat is vagy <a href='%s'>kattints ide, hogy újat küldhessünk</a>.";
$definitions["message.emailTaken"]
	= "Ilyen email címmel már van felhasználónk!";
$definitions["message.empty"]
	= "Ki kell töltened ezt a mezőt.";
$definitions["message.emptyPost"]
	= "Őőő, valamit be is kell beírnod...";
$definitions["message.emptyTitle"]
	= "A beszélgetésed címe nem lehet üresen. Érted, nem kattinthatnak egy üres címre.. Gondold már át :)";
$definitions["message.esoTalkAlreadyInstalled"]
	= "<strong>Az esoTalk telepítve lett.</strong> Ha újra akarod telepíteni az esoTalk-t, töröld ezt a fájlt:<code>config/config.php</code>.";
$definitions["message.esoTalkUpdateAvailable"]
	= "Az esoTalk új verziója elérhet: %s.";
$definitions["message.esoTalkUpdateAvailableHelp"]
	= "Ajánlatos mindig a legújabb verziót használni az esoTalk-ból, már csak a biztonság végett is. És különben is király új funkciókat kapsz!";
$definitions["message.esoTalkUpToDate"]
	= "Az esoTalk verziód naprakész";
$definitions["message.esoTalkUpToDateHelp"]
	= "Az esoTalk-t a szabadidőnkben fejlesztjük. Légy jófej és <a href='%s' target='_blank'>adományozz</a>, hogy életben maradjon a projekt!";
$definitions["message.fatalError"]
	= "Az esoTalk végzetes hibát csinált. Próbáld újra, vagy <a href='%1\$s' target='_blank'>kérj segítséget</a>.";
$definitions["message.fileUploadFailed"]
	= "Valami rossz történt, a kért fájl nem töltődött fel. Vagy túl nagy, vagy nem megfelelő a formátuma?";
$definitions["message.fileUploadFailedMove"]
	= "A fájlt amit feltöltöttél nem sikerült a helyére másolni. Vedd fel a kapcsolatot a fórum adminnal.";
$definitions["message.fileUploadNotImage"]
	= "A fájl amit feltöltöttél nem kép, vagy nem elfogadott formátum.";
$definitions["message.fileUploadTooBig"]
	= "A kiválsztott fájl túl nagy a feltöltéshez.";
$definitions["message.forgotPasswordHelp"]
	= "Szóval elfelejtetted a jelszavad! Ne aggódj, előfordul ez. Csak add meg az email címed és elküldjük emailben mit kell tenned.";
$definitions["message.fulltextKeywordWarning"]
	= "A kereső szavaid minimum 4 betűből álljanak, különben túl sok találatot kapnál...";
$definitions["message.gambitsHelp"]
	= "Gambits are phrases that describe what you are looking for. Click on a gambit to insert it into the search field. Double-click on a gambit to instantly search for it. Normal search keywords work too!";
$definitions["message.gdNotEnabledWarning"]
	= "<strong>A GD kiterjesztés nincs engedélyezve.</strong> Ez kelleni fog a képek méretezéséhez. Kérd meg a rendszergazdát, hogy engedélyezze.";
$definitions["message.greaterMySQLVersionRequired"]
	= "<strong>Legalább MySQL 4 kellene. <a href='http://php.net/manual/en/mysql.installation.php' target='_blank'>MySQL kiterjesztés engedélyezés</a>.</strong> Kérlek telepíts, vagy engedélyezd a MySQL-t, hogy a minimum követelményeknek megfeleljen a szerver környezeted.";
$definitions["message.greaterPHPVersionRequired"]
	= "<strong>A szerveren legalább %s PHP-nak kellene lennie, hogy az esoTalk fusson.</strong> Kérlek frissítsd, vagy telepítsd a megfelelő PHP verziót.";
$definitions["message.incorrectLogin"]
	= "A belépési adataid nem megfelelőek.";
$definitions["message.incorrectPassword"]
	= "A jelszavad nem jó.";
$definitions["message.installerAdminHelp"]
	= "Az esoTalk a következő infókat a fórum adminisztrációhoz fogja felhasználni.";
$definitions["message.installerFilesNotWritable"]
	= "<strong>esoTalk nem tud írni az alábbi mappákba: %s.</strong> A probléma megoldásához, a mappákra adj <code>chmod</code>-dal <code>0777</code>-t.";
$definitions["message.installerWelcome"]
	= "Az alábbi adatokkal add meg a fórumod adatait.<br>Ha bármi gond lenne, kérj segítséget az <a href='%s' target='_blank'>esoTalk honlapján</a>.";
$definitions["message.invalidChannel"]
	= "Hibás csatornát választottál!";
$definitions["message.invalidEmail"]
	= "Úgy látom ez az email nem valós...";
$definitions["message.invalidUsername"]
	= "A felhasználó neved 3 - 20 betűből állhat.";
$definitions["message.javascriptRequired"]
	= "Az oldal működéséhez javascript kell. Kérlek engedélyezd!";
$definitions["message.languageUninstalled"]
	= "A nyelv nincs telepítve.";
$definitions["message.locked"]
	= "Hm, úgy látszik ez a beszélgetés <strong>zárolt</strong>, így nem tudsz válaszolni.";
$definitions["message.loginToParticipate"]
	= "Beszélgetés kezdéséhez, vagy válaszoláshoz, jelentkezz be.";
$definitions["message.logInToReply"]
	= "<a href='%1\$s' class='link-login'>Belépés</a> vagy <a href='%2\$s' class='link-join'>Regisztráció</a> ha válaszolni akarsz!";
$definitions["message.logInToSeeAllConversations"]
	= "<a href='".URL("user/login")."' class='link-login'>Lépj be</a>, hogy lássál minden beszélgetést.";
$definitions["message.memberNotFound"]
	= "Hm, nem találunk ilyen nevű felhsaználót.";
$definitions["message.memberNoPermissionView"]
	= "Nem tudjuk hozzáadni ezt a felhsználót, mert nincs joga a beszélgetés megtekintéséhez.";
$definitions["message.nameTaken"]
	= "A név amit megadtál foglalt, vagy nem használható.";
$definitions["message.newSearchResults"]
	= "A keresésed eredménye lehet, hogy elévült. <a href='%s'>Frissítés</a>";
$definitions["message.noActivity"]
	= "%s óta nem történt semmi!";
$definitions["message.noChannels"]
	= "Nincs látható csatorna.";
$definitions["message.noMembersOnline"]
	= "Senki nincs online.";
$definitions["message.noNotifications"]
	= "Nincs új eseményed.";
$definitions["message.noPermission"]
	= "Nincs jogod ehhez a művelethez.";
$definitions["message.noPermissionToReplyInChannel"]
	= "Nincs jogod válaszolni ebben a csatornában.";
$definitions["message.noPluginsInstalled"]
	= "Nincsenek bővítmények telepítve.";
$definitions["message.noSearchResults"]
	= "Nincs a keresésednek megfelelő beszélgetés.";
$definitions["message.noSearchResultsMembers"]
	= "Nem találtunk senkit.";
$definitions["message.noSearchResultsPosts"]
	= "Nem találtunk ilyen bejegyzést.";
$definitions["message.noSkinsInstalled"]
	= "Nincsnek témák telepítve.";
$definitions["message.notWritable"]
	= "<code>%s</code> nem írható. Próbáld a <code>chmod</code>-dal <code>777</code>-t adni rá, de lehet, hogy csak nem létezik.";
$definitions["message.pageNotFound"]
	= "Az oldal amit keresel nem létezik.";
$definitions["message.passwordChanged"]
	= "Rendben, a jelszavad megváltozoztt. Most már beléphetsz! És próbáld meg nem elfelejteni, OK?";
$definitions["message.passwordEmailSent"]
	= "Ok, kiküldtünk egy levelet, benne a jelszó módosító linkkel. Ellenőrizd a SPAM mappádat is, ha nem találnád 1-2 percen belül.";
$definitions["message.passwordsDontMatch"]
	= "A jelszavaid nem egyeznek.";
$definitions["message.passwordTooShort"]
	= "A jelszó túl rövid.";
$definitions["message.pluginCannotBeEnabled"]
	= "A bővítmény <em>%s</em> nem engedélyezhető: %s";
$definitions["message.pluginDependencyNotMet"]
	= "A bővítmény engedélyezéséhez, kell a %s %s verziója.";
$definitions["message.pluginUninstalled"]
	= "A bővítmény eltávolítva.";
$definitions["message.postNotFound"]
	= "A kért bejegyzés nem található.";
$definitions["message.postTooLong"]
	= "A bejegyzésed nagyon nagyon hosszú! Túl hosszú! A maximum karakterszám %s. Ennek elégnek kell lennie!";
$definitions["message.preInstallErrors"]
	= "Ezeket a problémákat meg kell oldanod a folytatáshoz.";
$definitions["message.preInstallWarnings"]
	= "Folytathatod a telepítést a figyelmeztetések ellenére, de néhány funkció korlátozva lesz, vagy nem tudod használni majd.";
$definitions["message.reduceNumberOfGambits"]
	= "Csökkentsd a kulcsszavak számát, így valószínűleg több találatot fogsz kapni.";
$definitions["message.registerGlobalsWarning"]
	= "<strong>A PHP register_globals engedélyezve van.</strong> A biztonságos használathoz kérjük kapcsold inkább ki...";
$definitions["message.registrationClosed"]
	= "A regisztráció ehhez a fórumhoz zárt.";
$definitions["message.removeDirectoryWarning"]
	= "Hé! úgy látom nem törölted a <code>%s</code> mappát amit mondtunk! Tudod..., a hekkerek miatt jobb lenne, ha mégis törölnéd.";
$definitions["message.safeModeWarning"]
	= "<strong>Biztonságos mód bekapcsolva.</strong> Ez gondot okozhat az esoTalknak, de hsaználhatod addig is.";
$definitions["message.searchAllConversations"]
	= "Keress minden beszélgetésben.";
$definitions["message.setNewPassword"]
	= "Rendben! Szeretnél akkor új jelszót?";
$definitions["message.skinUninstalled"]
	= "A téma el lett távolítva.";
$definitions["message.suspended"]
	= "Uhh! A fórum moderátor <strong>felfüggesztette</strong> a profilodat. Szívás, de amíg fel vagy függesztve, nem tudsz mindent használni a fórumban.";
$definitions["message.suspendMemberHelp"]
	= "A felfüggesztés miatt %s nem tud válaszolni, új beszélgetést kezdeni, és a privát üzeneteket megnézni. Nagyjából annyit tud majd tenni mint egy vendég látogató.";
$definitions["message.tablePrefixConflict"]
	= "A telepítő észlelt egy másik esoTalk példányt, érdemes lenne a MySQL táblákat külön prefixálni.<br>
		• Ha felül akarod írni a meglévő telepítést, kattints a 'Újre telepítés'-re. <strong>Minden adatod el fog veszni.</strong><br>
		• Ha a meglévő mellé szeretnéd telepíteni, akkor változtasd meg a tábla prefixeket.";
$definitions["message.unsuspendMemberHelp"]
	= "Az újra engedélyezés %s után újra használni tudja a fórumot a felhasználó.";
$definitions["message.upgradeSuccessful"]
	= "Az esoTalk sikeresen frissült.";
$definitions["message.waitForApproval"]
	= "Mielőtt hsaználni kezdenéd az új profilodat, az adminnak el kell azt fogadnia. Küldünk egy levelet ha ez megtörtént!";
$definitions["message.waitToReply"]
	= "Várnod kell legalább %s másodpercet két bejegyzés között. Végy egy nagy levegőt és próbáld újra.";
$definitions["message.waitToSearch"]
	= "Huh, várj várj! Túl sok keresést csináltál. Várj %s másodpercet és próbálkozz újra.";


// Emails.
$definitions["email.header"] = "<p>Helló %s!</p>";
$definitions["email.footer"] = "<p>(Ha nem szeretnél több ilyen levelet kapni, állítsd be azt az <a href='%s'>értesítési beállításoknál</a>.)</p>";

$definitions["email.confirmEmail.subject"] = "%1\$s, erősítsd meg az email címedet";
$definitions["email.confirmEmail.body"] = "<p>Valaki (reméljük Te!) feliratkozott a fórumra '%1\$s' ezzel az email címmel.</p><p>Ha Te voltál az, akkor csak kattints az alábbi linkre és a profilod aktiválva lesz:<br>%2\$s</p>";

$definitions["email.approved.subject"] = "%1\$s, a fiókod el lett fogadva";
$definitions["email.approved.body"] = "<p>A profilod %1\$s elfogadták.</p><p>A következő linkre kattintva bejelentkezhetsz és kezdheted is a beszélgetést:<br>%2\$s</p>";

$definitions["email.forgotPassword.subject"] = "Elfelejtetted a jelszavad, %1\$s?";
$definitions["email.forgotPassword.body"] = "<p>Valaki (reméljük Te!) új jelszót kért a fórumon '%1\$s'. Ha nem szeretnéd megváltoztatni a jelszavad, csak hagyd figyelmen kívül ezt a levelet és semmi nem fog történni.</p><p>Egyébkét, ha tényleg elfelejtetted a jelszavad, az új jelszóhoz az alábbi linkre kattintva juthatsz:<br>%2\$s</p>";

$definitions["email.mention.subject"] = "[%1\$s Megemlített] itt %2\$s";
$definitions["email.mention.body"] = "<p><strong>%1\$s</strong> megemlített egy bejegyzésben <strong>%2\$s</strong>.</p><hr>%3\$s<hr><p>A megtekintéshez kattints a linkre:<br>%4\$s</p>";

$definitions["email.privateAdd.subject"] = "[Magánbeszélgetés] %1\$s";
$definitions["email.privateAdd.body"] = "<p>Hozzáadtak egy magán beszélgetéshez: <strong>%1\$s</strong>.</p><hr>%2\$s<hr><p>A beszélgetés megtekintéséhez kattints a linkre:<br>%3\$s</p>";

$definitions["email.post.subject"] = "[Új válasz] %1\$s";
$definitions["email.post.body"] = "<p><strong>%1\$s</strong> válaszolt a beszélgetésben: <strong>%2\$s</strong></p><hr>%3\$s<hr><p>Az új hozzászólás megtekintéséhez kattints a linkre:<br>%4\$s</p>";


// Translating the gambit system can be quite complex, but we'll do our best to get you through it. :)
// Note: Don't use any html entities in these definitions, except for: &lt; &gt; &amp; &#39;

// Simple gambits
// These gambits are pretty much evaluated as-they-are.
// tag:, author:, contributor:, and quoted: are combined with a value after the colon (:).
// For example: tag:video games, author:myself
$definitions["gambit.author:"] = "szerző:";
$definitions["gambit.contributor:"] = "hozzájáruló:";
$definitions["gambit.member"] = "tag";
$definitions["gambit.myself"] = "saját magad";
$definitions["gambit.draft"] = "piszkozat";
$definitions["gambit.locked"] = "zárolt";
$definitions["gambit.order by newest"] = "újak előre";
$definitions["gambit.order by replies"] = "válaszok előre";
$definitions["gambit.private"] = "privát";
$definitions["gambit.random"] = "véletlen";
$definitions["gambit.reverse"] = "fordított";
$definitions["gambit.starred"] = "követett";
$definitions["gambit.ignored"] = "mellőzött";
$definitions["gambit.sticky"] = "rögzített";
$definitions["gambit.unread"] = "olvasatlan";
$definitions["gambit.limit:"] = "korlát:";

// Aliases
// These are gambits which tell the gambit system to use another gambit.
// In other words, when you type "active today", the gambit system interprets it as if you typed "active 1 day".
// The first of each pair, the alias, can be anything you want.
// The second, however, must fit with the regular expression pattern defined below (more on that later.)
$definitions["gambit.active today"] = "ma aktívak"; // what appears in the gambit cloud
$definitions["gambit.active 1 day"] = "1 napja aktívak"; // what it actually evaluates to

$definitions["gambit.has replies"] = "van válasz";
$definitions["gambit.has >0 replies"] = ">0 válasz";
$definitions["gambit.has >10 replies"] = ">10 válasz";

$definitions["gambit.has no replies"] = "nincs válasz";
$definitions["gambit.has 0 replies"] = "0 válasz";

$definitions["gambit.dead"] = "halott";
$definitions["gambit.active >30 day"] = "aktív >30 napja";

// Units of time
// These are used in the active gambit.
// ex. "[active] [>|<|>=|<=|last] 180 [second|minute|hour|day|week|month|year]"
$definitions["gambit.second"] = "másodperc";
$definitions["gambit.minute"] = "perc";
$definitions["gambit.hour"] = "óra";
$definitions["gambit.day"] = "nap";
$definitions["gambit.week"] = "hét";
$definitions["gambit.month"] = "hónap";
$definitions["gambit.year"] = "év";
$definitions["gambit.last"] = "utoljára"; // as in "active last 180 days"
$definitions["gambit.active"] = "aktív"; // as in "active last 180 days"

// Now the hard bit. This is a regular expression to test for the "active" gambit.
// The group (?<a> ... ) is the comparison operator (>, <, >=, <=, or last).
// The group (?<b> ... ) is the number (ex. 24).
// The group (?<c> ... ) is the unit of time.
// The languages of "last" and the units of time are defined above.
// However, if you need to reorder the groups, do so carefully, and make sure spaces are written as " *".
$definitions["gambit.gambitActive"] = "/^{$definitions["gambit.active"]} *(?<a>>|<|>=|<=|{$definitions["gambit.last"]})? *(?<b>\d+) *(?<c>{$definitions["gambit.second"]}|{$definitions["gambit.minute"]}|{$definitions["gambit.hour"]}|{$definitions["gambit.day"]}|{$definitions["gambit.week"]}|{$definitions["gambit.month"]}|{$definitions["gambit.year"]})/";

// These appear in the tag cloud. They must fit the regular expression pattern where the ? is a number.
// If the regular expression pattern has been reordered, these gambits must also be reordered (as well as the ones in aliases.)
$definitions["gambit.active last ? hours"] = "? {$definitions["gambit.hour"]}ban {$definitions["gambit.last"]} {$definitions["gambit.active"]}";
$definitions["gambit.active last ? days"] = "? {$definitions["gambit.day"]}ban {$definitions["gambit.last"]} {$definitions["gambit.active"]}";

// This is similar to the regular expression for the active gambit, but for the "has n reply(s)" gambit.
// Usually you just need to change the "has" and "repl".
$definitions["gambit.gambitHasNReplies"] = "/^has *(?<a>>|<|>=|<=)? *(?<b>\d+) *repl/";