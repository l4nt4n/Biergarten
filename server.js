const express = require('express');
const fs = require('fs');
const basicAuth = require('express-basic-auth');

const app = express();
const PORT = 3000;

// Basic Auth für Admin-Bereich
app.use('/admin', basicAuth({
  users: { 'admin': 'deinpasswort' }, // ⚠️ Passwort hier ändern!
  challenge: true
}));

app.use(express.static('public'));
app.use('/admin', express.static('public'));

// API-Endpunkt für Statusabfrage
app.get('/api/status', (req, res) => {
  const data = JSON.parse(fs.readFileSync('status.json'));
  res.json(data);
});

// API-Endpunkt zum Setzen des Status (open/closed)
app.get('/api/set/:state', (req, res) => {
  const newState = req.params.state === 'open';
  const newStatus = {
    open: newState,
    last_changed: new Date().toISOString()
  };
  fs.writeFileSync('status.json', JSON.stringify(newStatus, null, 2));
  res.send(`Status wurde auf ${newState ? '🟢 offen' : '🔴 geschlossen'} gesetzt.`);
});

app.listen(PORT, () => {
  console.log(`Server läuft auf http://localhost:${PORT}`);
});
