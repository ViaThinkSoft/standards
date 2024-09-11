#/usr/bin/python3

#from rfc2html import markup
from step1 import markup
import sys
import requests
import os

def fetch_from_url(url):
    try:
        response = requests.get(url)
        response.raise_for_status()  # Überprüft, ob es HTTP-Fehler gab
        return response.text
    except requests.exceptions.RequestException as e:
        print(f"Fehler beim Abrufen der URL: {e}")
        sys.exit(1)

def fetch_from_file(file_path):
    try:
        with open(file_path, 'r', encoding='utf-8') as file:
            return file.read()
    except OSError as e:
        print(f"Fehler beim Lesen der Datei: {e}")
        sys.exit(1)

def main(input_path):
    if input_path.startswith('http://') or input_path.startswith('https://'):
        # Falls die Eingabe eine URL ist, wird sie heruntergeladen
        content = fetch_from_url(input_path)
    elif os.path.isfile(input_path):
        # Falls die Eingabe ein Pfad ist, wird die Datei eingelesen
        content = fetch_from_file(input_path)
    else:
        print("Die Eingabe ist weder eine gültige URL noch ein existierender Dateipfad.")
        sys.exit(1)

    # rfc2html
    html = markup(content, "https://datatracker.ietf.org/doc/html")

    # Der Inhalt wird ausgegeben
    print(html)

if __name__ == "__main__":
    if len(sys.argv) != 2:
        print("Verwendung: python3 fetch_content.py <URL oder Dateipfad>")
        sys.exit(1)

    input_path = sys.argv[1]
    main(input_path)

