#!/usr/bin/bash

# Run only within the devcontainer
if [ -d ~/.vscode-server ]; then
  # Automatically install recommended VS Code extensions defined in '.vscode/extensions.json'
  for extension in $(jq -r '.recommendations[]' .vscode/extensions.json); do
    echo "Installing recommended VS Code extension '$extension'..."
    ~/.vscode-server/bin/*/bin/remote-cli/code --install-extension $extension
  done
fi
