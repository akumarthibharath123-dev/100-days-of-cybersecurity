import requests
import sys

def check_wayback_availability(url):
    """
    Checks the Wayback Machine API for available snapshots of a URL.
    """
    print(f"[*] Checking archives for: {url}")
    
    # Wayback Machine Availability API
    api_url = f"http://archive.org/wayback/available?url={url}"
    
    try:
        response = requests.get(api_url)
        data = response.json()
        
        if "archived_snapshots" in data and data["archived_snapshots"]:
            closest = data["archived_snapshots"]["closest"]
            print(f"[+] Snapshot found!")
            print(f"    - Date: {closest['timestamp']}")
            print(f"    - Archive URL: {closest['url']}")
        else:
            print("[-] No snapshots found in the archive.")
            
    except Exception as e:
        print(f"[-] Error: {e}")

if __name__ == "__main__":
    if len(sys.argv) < 2:
        print("Usage: python3 wayback_check.py <TARGET_URL>")
    else:
        target_url = sys.argv[1]
        check_wayback_availability(target_url)
