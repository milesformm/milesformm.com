
## Add a new ssh key to prod

First, on the computer needing access

1. Generate a key using `ssh-keygen`.
2. upload your generated public key to pastebin. Save for later.

Second, on server that you'd like to access

1. SSH in using emergency console, log in as root.
2. Use `curl [[pastebin raw url]] >> new_public_key.pub` to download the key to the server
3. Execute the following: `cat /path/to/new_public_key.pub | sudo sshcommand acl-add dokku my-new-sweet-computer`

## Deploy

Execute `./deploy`