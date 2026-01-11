import requests
import sys

def reverse_ip_lookup(ip_address):
    """
    Performs a Reverse IP Lookup using a free API to find domains on the same server.
    """
    print(f"[*] Performing Reverse IP Lookup for: {ip_address}")
    
    # Using a standard free API for demonstration (HackerTarget)
    url = f"https://api.hackertarget.com/reverseiplookup/?q={ip_address}"
    
    try:
        response = requests.get(url)
        if "API count exceeded" in response.text:
            print("[-] API limit exceeded. Try again later.")
            return

        domains = response.text.split("\n")
        print(f"[+] Found {len(domains)} domains hosted on this server:")
        print("-" * 40)
        
        for domain in domains:
            print(f" - {domain}")
            
    except Exception as e:
        print(f"[-] Error: {e}")

if __name__ == "__main__":
    if len(sys.argv) < 2:
        print("Usage: python3 reverse_ip.py <IP_ADDRESS>")
    else:
        target_ip = sys.argv[1]
        reverse_ip_lookup(target_ip)
