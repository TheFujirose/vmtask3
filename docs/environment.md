# Environment Setup

## Fedora Distribution
Below is Bash code for installing requirements and setup; there is an optional component.
```bash
# Update and install requirements
sudo dnf -y update && sudo dnf -y install php php-mysqli php-cli  phpunit composer wget
# Get xampp
wget https://sourceforge.net/projects/xampp/files/XAMPP%20Linux/8.2.12/xampp-linux-x64-8.2.12-0-installer.run
chmod a+x xampp-linux-x64-8.2.12-0-installer.run
sudo ./xampp-linux-x64-8.2.12-0-installer.run/
# make an alias for calling
echo "alias lamp='sudo /opt/lampp/lampp'" >> ~/.bashrc
source ~/.bashrc

# Optional: for if you want GUI
echo "alias xampp='sudo GDK_SCALE=1.5 /opt/lampp/manager-linux-x64.run'" >> ~/.bashrc
source ~/.bashrc
```
## Other
1. Following the [PHP installation setup](../README.md#php-install), PHP should be installed.
2. You may need to review your [system requirements](https://getcomposer.org/doc/00-intro.md#system-requirements).
3. Follow the instructions [here](https://getcomposer.org/doc/00-intro.md) to install.
4. [Install](https://sourceforge.net/projects/xampp/) XAMMP