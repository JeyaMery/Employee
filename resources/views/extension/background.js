// Set the default color
let color = '#366fb5';

// Add an event listener for when the extension is installed or updated
chrome.runtime.onInstalled.addListener(() => {
    // Store the default color in synchronized storage
    chrome.storage.sync.set({ color });

    // Log a message to the console indicating that the default background color has been set
    console.log('Default background color set to %cgreen', `color: ${color}`);
});