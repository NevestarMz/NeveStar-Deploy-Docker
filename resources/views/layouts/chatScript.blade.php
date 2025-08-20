    <script>
        const chatButton = document.getElementById('chatButton');
        const chatWindow = document.getElementById('chatWindow');
        const closeChat = document.getElementById('closeChat');
        const minimizeChat = document.getElementById('minimizeChat');

        const choiceScreen = document.getElementById('choiceScreen');
        const chatScreen = document.getElementById('chatScreen');
        const botButton = document.getElementById('botButton');
        const agentButton = document.getElementById('agentButton');

        const messageInput = document.getElementById('messageInput');
        const sendButton = document.getElementById('sendButton');
        const inputArea = document.getElementById('inputArea');
        const chatContent = document.getElementById('chatContent');

        let currentAgent = null;
        let chatStep = 0;
        let userData = { 
            name: "", 
            email: "", 
            topic: "" 
        };
        let chatHistory = [];

        // Abrir chat
        chatButton.addEventListener('click', () => chatWindow.classList.toggle('hidden'));

        // Minimizar
        minimizeChat.addEventListener('click', () => chatWindow.classList.toggle('hidden'));

        // Fechar chat
        closeChat.addEventListener('click', () => chatWindow.classList.add('hidden'));

        // Escolher tipo de atendimento
        botButton.addEventListener('click', () => startChat("Bot"));
        agentButton.addEventListener('click', () => startChat("Agente"));

        // Enviar mensagem
        sendButton.addEventListener('click', sendMessage);
        messageInput.addEventListener('keypress', e => { 
            if(e.key === "Enter") sendMessage(); });

        function startChat(agent) {
            currentAgent = agent;
            choiceScreen.classList.add('hidden');
            chatScreen.classList.remove('hidden');
            inputArea.classList.remove('hidden');
            chatStep = 0;
            restoreChat();
            if(agent === "Bot") simulateTyping(() => addBotMessage("Olá! Sou o Bot de suporte. Qual é o seu nome?"));
            else simulateTyping(() => addBotMessage("Olá! Um agente humano irá atendê-lo. Qual é o seu nome?"));
        }

        function restoreChat() {
            chatScreen.innerHTML = '';
            chatHistory.forEach(msg => addMessage(msg.sender, msg.text, false));
            chatContent.scrollTop = chatContent.scrollHeight;
        }

        function sendMessage() {
            const text = messageInput.value.trim();
            if(!text) return;
            addMessage("Você", text, true);
            messageInput.value = "";
            if(currentAgent === "Bot") proceedBotChat(text);
            else proceedAgentChat(text);
        }

        function addMessage(sender, text, save=true) {
            const msgDiv = document.createElement("div");
            msgDiv.className = "fade-in " + (sender === "Você" ? "self-end bg-blue-100 text-gray-800 p-2 rounded-lg max-w-[80%] break-words" : "self-start bg-gray-100 text-gray-800 p-2 rounded-lg max-w-[80%] break-words");
            msgDiv.innerText = text;
            chatScreen.appendChild(msgDiv);
            chatContent.scrollTop = chatContent.scrollHeight;
            if(save) chatHistory.push({ sender, text });
        }

        function addBotMessage(text) {
            addMessage(currentAgent, text);
        }

        function simulateTyping(callback) {
            const typingDiv = document.createElement("div");
            typingDiv.className = "self-start bg-gray-100 p-2 rounded-lg max-w-[60%] flex gap-1 items-center";
            for(let i=0;i<3;i++){
                const dot = document.createElement("span");
                dot.className = "typing";
                typingDiv.appendChild(dot);
            }
            chatScreen.appendChild(typingDiv);
            chatContent.scrollTop = chatContent.scrollHeight;
            setTimeout(() => { typingDiv.remove(); callback(); }, 1000 + Math.random()*800);
        }

        // Bot interativo
        function proceedBotChat(input) {
            const cmd = input.toLowerCase();
            switch(chatStep) {
                case 0:
                userData.name = input;
                simulateTyping(() => { addBotMessage(`Prazer em conhecer você, ${userData.name}! Qual é o seu email?`); chatStep++; });
                break;
                case 1:
                userData.email = input;
                simulateTyping(() => { addBotMessage("Sobre qual assunto você deseja falar?"); chatStep++; });
                break;
                case 2:
                userData.topic = input;
                simulateTyping(() => { 
                    addBotMessage(`Perfeito, ${userData.name}! Estamos iniciando o atendimento sobre "${userData.topic}".`); 
                    simulateTyping(() => addBotMessage("Digite 'menu' para ver opções ou faça sua pergunta.")); 
                });
                chatStep++;
                break;
                default:
                simulateTyping(() => {
                    let reply = "Desculpe, não entendi. Digite 'menu' para ver opções.";
                    if(cmd.includes("menu")) reply = "Opções do Bot:\n1. Informações sobre produtos\n2. Suporte técnico\n3. Pagamentos\nDigite o número da opção.";
                    if(cmd === "1") reply = "Aqui estão informações sobre nossos produtos...";
                    if(cmd === "2") reply = "Você será guiado para suporte técnico...";
                    if(cmd === "3") reply = "Informações sobre pagamentos: aceitamos cartões, MB Way e transferência bancária.";
                    addBotMessage(reply);
                });
                break;
            }
        }

        // Agente humano
        function proceedAgentChat(input) {
            if(chatStep === 0) {
                userData.name = input;
                simulateTyping(() => addBotMessage(`Obrigado ${userData.name}, em breve um agente humano estará disponível para falar com você.`));
                chatStep++;
            } else {
                simulateTyping(() => addBotMessage("Um agente humano está respondendo..."));
            }
        }
    </script>