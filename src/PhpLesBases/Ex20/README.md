# Exercice Ex20 : members_only
#### Fichiers à rendre : `members_only.php`
#### Fonctions Autorisées : header(), echo, $_SERVER, file_get_contents, base64_encode
#### Remarques : n/a

Créez une page members_only.php qui réclame un login/pass au niveau du protocol http. Si le login est “wild-code-school” et le pass “jaimelespetitsponeys” la réponse doit être une page html basique.
Vous devrez reproduire l’exemple suivant :

```bash
$> curl -k --user wild-code-school:jaimelespetitsponeys https://localhost/phpLesBases/Ex20/members_only.php
<html><body>
Bonjour wild-code-school<br />
</body></html>
$>
```

>Si le login/pass ne correspond pas à “wild-code-school” / “jaimelespetitsponeys”, renvoyer un message d’erreur exactement comme dans l’exemple suivant

```bash
$> curl -kv --user root:root https://localhost/phpLesBases/Ex20/members_only.php
*   Trying 127.0.0.1:443...
* Connected to localhost (127.0.0.1) port 443 (#0)
...
...
* Server auth using Basic with user 'root'
* Using Stream ID: 1 (easy handle 0x7fc201012e00)
> GET /Ex20/members_only.php HTTP/2
> Host: localhost
> authorization: Basic cm9vdDpyb290
> user-agent: curl/7.79.1
> accept: */*
>
* Connection state changed (MAX_CONCURRENT_STREAMS == 250)!
< HTTP/2 401
< alt-svc: h3=":443"; ma=2592000,h3-29=":443"; ma=2592000
< content-type: text/html; charset=UTF-8
< permissions-policy: interest-cohort=()
< server: Caddy
< set-cookie: XDEBUG_SESSION=VSCODE; path=/; SameSite=Lax
< status: 401 Unauthorized
* Authentication problem. Ignoring this.
< www-authenticate: Basic realm=''Espace membres''
< content-length: 83
< date: Mon, 18 Apr 2022 17:46:01 GMT
<
<html><body>Cette zone est accessible uniquement aux membres du site</body></html>
* Connection #0 to host localhost left intact
$>
```