# Biergarten Status-Anzeige

Zeigt öffentlich, ob der Biergarten geöffnet oder geschlossen ist – mit Web-Interface und JSON-API.

## Starten

```bash
npm install
npm start
```

Rufe `http://localhost:3000` oder `/admin/admin.html` auf (Login erforderlich).

## Status ändern via API

- `/api/set/open` – setzt Status auf "offen"
- `/api/set/closed` – setzt Status auf "geschlossen"
- `/api/status` – gibt aktuellen Status als JSON zurück

## Admin-Login

Standard:
- Benutzer: `admin`
- Passwort: `deinpasswort`
