# Tips

1. How to check if the extension `mbstring` is enabled:
    - Windows: `php -m | findstr mbstring`
    - MacOS/Linux: `php -m | grep mbstring`

2. How to enable `mbstring`:
    - See where your `php.ini` file is by running `php --ini`
    - Add `extension=mbstring` to it.

3. How to install `mbstring` in a Debian-based Linux distro (e.g. Ubuntu):
    ```bash
    sudo apt install php-mbstring
    ```
