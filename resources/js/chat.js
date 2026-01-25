// import Echo from "laravel-echo";
// import { io } from "socket.io-client";

// window.io = io;

// const echo = new Echo({
//     broadcaster: 'reverb',
//     key: import.meta.env.VITE_REVERB_APP_KEY ?? "local-app-key",
//     wsHost: window.location.hostname,
//     wsPort: import.meta.env.VITE_REVERB_PORT ?? 8080,
//     forceTLS: false,
//     enabledTransports: ["ws", "wss"],
// });

// document.addEventListener("DOMContentLoaded", () => {
//     const form = document.getElementById("chat-form");
//     const input = document.getElementById("chat-input");
//     const messages = document.getElementById("chat-messages");

//     echo.channel("chat-room").listen(".NewMessage", (e) => {
//         const msg = document.createElement("div");
//         msg.className = "p-2 border-b";
//         msg.textContent = `${e.user}: ${e.message}`;
//         messages.appendChild(msg);
//     });

//     form.addEventListener("submit", async (e) => {
//         e.preventDefault();
//         const message = input.value.trim();
//         if (!message) return;

//         await fetch("/send-message", {
//             method: "POST",
//             headers: { "Content-Type": "application/json" },
//             body: JSON.stringify({ user: "Cliente", message }),
//         });

//         input.value = "";
//     });
// });
