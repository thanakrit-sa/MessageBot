<?php
$hubVerifyToken = 'MessageAuto';
$accessToken =   "EAADSvg5yW7UBAE1bhcjwLo9sgiPEUSJoUmgXUh3fcNuopsKzFCIMYwBqiSMAZBiXUy0QkaPZB6G9y7kZBTekkS4ZAWvoNPXlAifV2V8M491DN3oWZCzW2B0dGuXxfnYVyNI21oZAeogYniQPcbPkRoLvb2zYdFEJ04RbjCp8EDxAZDZD";


// "facebook_setting" : {
//     "type" : "template || carousel"  
//     "Template": {
//         "template_type" : "",
//         "text":"",
//           "top_element_style":"",
//           "elements" :[{
//               "title":"",
//               "url":"",
//               "media_type":"",
//               "image_url":"",
//               "default_action":{
//                   "type":"",               
//                   "url":"",                
//                   "messenger_extensions":true,  
//                   "webview_height_ratio":"",  
//                   "fallback_url":"",         
//               },
//               "buttons":[{
//                   "type":"",
//                   "url":"",
//                   "title":"",
//                   "payload":"",
//                   "messenger_extensions":true,
//                   "webview_height_ratio":"",
//                   "fallback_url":""
//               }]
//           }]
//       }
//   }

// e.preventDefault()
//         const hideCard = "hiddenCard" + e.target.id
//         const hideSelectCard = "hiddenSelectCard" + e.target.id
//         this.setState({ [hideCard]: true, [hideSelectCard]: false })
//         this.state.dataCardMessage.filter((item) => (item._id === e.target.name)).map(res => {
//             this.state["filterCardMessage" + e.target.id].push(res)
//             const dataFlex = JSON.parse(res.line_setting.flex_json)[0]
//             const preview = "preview" + e.target.id
//             const type = "cardType" + e.target.id
//             const dataBubble = "dataBubble" + e.target.id
//             console.log(dataFlex.contents.contents);
//             this.setState({ [dataBubble]: dataFlex.contents.contents, [preview]: false, [type]: JSON.parse(res.line_setting.flex_json)[2].type })
//             dataFlex.contents.contents.map((bubble, i) => {
//                 console.log(bubble.body.contents[2].contents);
//                 const dataTag = "dataTag" + e.target.id + i
//                 const dataAction = "dataAction" + e.target.id + i
//                 this.setState({ [dataAction]: bubble.footer.contents, [dataTag]: bubble.body.contents[2].contents })
//             })
//         })