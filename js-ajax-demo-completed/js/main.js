// [Step 1] Change the USERNAME const to your (user)name. This will be used as your chat handle.
// Then refresh the page and copy the message in the console.
const USERNAME = "Test user"; // Change it to your username

let chatConversationElement;
let sendButtonElement;
let messageTextAreaElement;

document.addEventListener("DOMContentLoaded", e => {
	init()
})

function init() {
	console.log(`[Step 1 Completed] ${USERNAME} has successfully loaded the js file at ${Date.now()}`)


	// [Step 2] create js instances to the HTML elements that will be used by us

	// chatConversationElement should point to an element with id "chat-conversation"
	chatConversationElement = document.getElementById("chat-conversation")
	// sendButtonElement should point to the send button element in the index.html file
	sendButtonElement = document.getElementById("send-btn")
	// messageTextAreaElement should point to the text area
	messageTextAreaElement = document.getElementById("text-message")

	// Преди да продължите към стъпка 3, рефрешнете браузъра. Трябва да получите съобщение в конзолата за
	// успешно завършена стъпка 2. Изпратете съобщението в zoom chat-a.
	if (chatConversationElement &&
		sendButtonElement &&
		messageTextAreaElement &&
		Object.getPrototypeOf(chatConversationElement).constructor.name == "HTMLUListElement" &&
		Object.getPrototypeOf(sendButtonElement).constructor.name == "HTMLButtonElement" &&
		Object.getPrototypeOf(messageTextAreaElement).constructor.name == "HTMLTextAreaElement"
	) {
		console.log(`[Step 2 Completed] ${USERNAME} has successfully created instances of the chat UI elements`)
	}

	initElementEventHandlers(sendButtonElement, messageTextAreaElement)

	updateChat()
	setInterval(() => {
		updateChat()
	}, 2000)
	// [Step 7] Използвайте setInterval за да извиквате updateChat на всеки 2000ms
}

// [Step 3] Имплементирайте функцията. След това натиснете send бутона и изпратете съобщението от конзолата
// в zoom
function initElementEventHandlers(sendButtonElement, messageTextAreaElement) {
	sendButtonElement.addEventListener("click", e => sendMessage(e))
	// Добавете handler за click евент, който да извиква sendMessage функцията. Подсказка - 7-ми ред

	// sendButtonElement...
	messageTextAreaElement.addEventListener("keypress", e => {
		if (e.code === 'Enter') {
			sendMessage(e)
		}
	})
	// (По желание) Добавете handler за евент, който да извиква sendMessage функцията при натискане на Enter
	// messageTextAreaElement...
}

function sendMessage(e) {
	console.log(`[Step 3 Completed] ${USERNAME} has successfully initialized the event handlers ${Date.now()}`)

	let msgObj = getMessageObject()
	// [Step 6] Изпратете POST request с JSON.stringify-нат  message към "SERVER_URL/sendMessage.php".
	// С полученият response извикайте renerConversation.php
	// FINALE

	fetch('http://localhost/sendMessage.php', {
		method: "POST",
		body: JSON.stringify(msgObj)
	}).
		then(response => response.json()).
		then(data => {
			renderConversation(data)
		})
}

// [Step 4] Използвайте fetch API-то, за да извикате (изпратите GET request към) "SERVER_URL/getConversation.php"
// Получения JSON подайте на renderConversation като параметър. Трябва да видите хронологията от чата на
// екрана си(в ul)
function updateChat() {
	fetch('http://localhost/getConversation.php').
		then(response => response.json()).
		then(data => {
			renderConversation(data)
		})
}

function getMessageObject() {
	// [Step 5] Вземете стойноста на messageTextAreaElement и заместете "message text" с нея. Hint: .value attribute
	let message = messageTextAreaElement.value
	return {
		user: USERNAME,
		message: message,
		timestamp: +new Date()
	}
}

function renderConversation(conversationJSON) {
	chatConversationElement.innerHTML = ""
	for (const msg of conversationJSON.conversation) {
		if (msg) {
			let li = document.createElement("li")
			li.innerHTML = `<strong>${msg.user}</strong>: ${msg.message}`
			chatConversationElement.appendChild(li);
		}
	}
}