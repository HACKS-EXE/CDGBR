import os
import sys
import requests
import shutil
import re

# Versão atual do script
__version__ = "12.0.0"  # Altere isso para a versão atual do seu script

# URL do script que será baixado (com uma versão diferente)
new_script_url = "https://raw.githubusercontent.com/HACKS-EXE/CDGBR/refs/heads/cod/T7/atualizacoes.py"  # Substitua pela URL real

def get_version_from_script(script_content):
    match = re.search(r'__version__ = "(.*?)"', script_content)
    if match:
        return match.group(1)
    return None

def download_new_script(url, download_folder):
    response = requests.get(url)
    response.raise_for_status()  # Levanta um erro se o download falhar
    os.makedirs(download_folder, exist_ok=True)
    new_script_path = os.path.join(download_folder, 'atualizacoes.py')

    with open(new_script_path, 'wb') as f:
        f.write(response.content)
    return new_script_path

def update_script():
    download_folder = "new_version"
    new_script_path = download_new_script(new_script_url, download_folder)

    with open(new_script_path, 'r') as f:
        new_script_content = f.read()

    new_version = get_version_from_script(new_script_content)

    if new_version and compare_versions(new_version, __version__) > 0:
        print(f"New version {new_version} found, updating...")
        
        # Se o script atual se fecha
        print("Closing current script...")
        os.execv(sys.executable, ['python'] + [new_script_path])
        
        # O novo script deve deletar o antigo e se auto-copiar
        old_script_path = os.path.realpath(sys.argv[0])
        os.remove(old_script_path)  # Deleta o script antigo
        shutil.copy(new_script_path, old_script_path)  # Copia o novo script para o lugar do antigo

        # Limpa a pasta de nova versão
        shutil.rmtree(download_folder)

    else:
        print("No new version found or the new version is not greater.")

def compare_versions(vA, vB):
    seqA = list(map(int, re.findall(r'\d+', vA)))
    seqB = list(map(int, re.findall(r'\d+', vB)))

    while len(seqA) < len(seqB):
        seqA.append(0)
    while len(seqB) < len(seqA):
        seqB.append(0)

    return (seqA > seqB) - (seqA < seqB)

if __name__ == "__main__":
    update_script()
