import{r,j as e,d as P}from"./app-Dx-j_UOv.js";import{S as k,H as D,g as R}from"./sidebar-BA9vNQcI.js";import{F as x}from"./index-CCQNuVCj.js";import{R as S}from"./index-CT3Yx0Du.js";const V=({admin:i,doctor:m})=>{const[n,h]=r.useState(!0),[p,u]=r.useState(!0),[j,g]=r.useState([]),[y,f]=r.useState([]),[d,b]=r.useState({}),[t,c]=r.useState({admin_type:i.type,admin_id:i.id,patient_id:"",pathology_category_id:"",report_days:"",report_date:"",tax:"",amount:"",doctor:"",note:"",previous_value:"",discount:"",net_amount:"",payment_mode:"",date:"",bill_no:"",case_id:""}),N=async()=>{try{const a=await axios.get("/api/admin/patient-fetch");g(a.data)}catch(a){console.error("Error fetching data:",a)}},v=async()=>{try{const a=await axios.post("/api/admin/pathology-fetch-bill");console.log(a),f(a.data)}catch(a){console.error("Error fetching data:",a)}};r.useEffect(()=>{N(),v()},[]);const s=a=>{const{name:l,value:C}=a.target;c({...t,[l]:C}),b({...d,[l]:""})},w=async a=>{a.preventDefault();try{await axios.post("/api/admin/pathology-store-bill",t),c({admin_type:"",admin_id:"",pathology_category_id:"",report_days:"",report_date:"",tax:"",amount:"",doctor:"",note:"",previous_value:"",discount:"",net_amount:"",payment_mode:"",date:"",bill_no:"",case_id:""}),PharmacyBillfetchData(),Swal.fire({icon:"success",title:"Success!",text:"Form submitted successfully!"})}catch(l){console.log(l)}},_=()=>{u(!p)},o=()=>{h(!n)};return e.jsxs("div",{className:"flex h-screen",children:[e.jsx("div",{className:"bg-gray-800 text-white w-[11%] flex-shrink-0",children:e.jsx(k,{})}),e.jsxs("div",{className:"flex-grow bg-gray-100 ",children:[e.jsx(D,{}),e.jsxs("div",{className:"relative",children:[e.jsx("div",{className:"card mt-2",children:e.jsxs("div",{className:"card-header flex justify-between px-[3rem] border py-3",children:[e.jsx("div",{className:"grid place-items-center text-[18px]",children:e.jsx("h1",{children:"Pathology Billing"})}),".",e.jsxs("div",{className:"flex space-x-3",children:[e.jsxs("button",{type:"button",onClick:o,className:"bg-gray-700 p-2 text-white rounded-md flex space-x-2",children:[e.jsx("div",{className:"grid place-items-center mt-1",children:e.jsx(x,{})}),e.jsx("h1",{children:"Generate Bill "})]}),e.jsxs(P,{href:"/admin/pathology/test",className:"bg-gray-700 p-2 text-white rounded-md flex space-x-2",children:[e.jsx("div",{className:"grid place-items-center mt-1",children:e.jsx(x,{})}),e.jsx("h1",{children:"Pathology Test "})]})]})]})}),e.jsx("div",{className:"overflow-x-auto",children:e.jsxs("table",{className:"table-auto min-w-full divide-y divide-gray-200",children:[e.jsx("thead",{className:"bg-gray-50",children:e.jsxs("tr",{children:[e.jsx("th",{className:"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider",children:"Bill No"}),e.jsx("th",{className:"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider",children:"Case ID"}),e.jsx("th",{className:"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider",children:"Reporting Date"}),e.jsx("th",{className:"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider",children:"Patient Name"}),e.jsx("th",{className:"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider",children:"Doctor"}),e.jsx("th",{className:"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider",children:"Previous Report Value"}),e.jsx("th",{className:"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider",children:"Amount (Rs.)"}),e.jsx("th",{className:"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider",children:"Paid Amount (Rs.)"}),e.jsx("th",{className:"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider",children:"Balance Amount (Rs.)"})]})}),e.jsx("tbody",{className:"bg-white divide-y divide-gray-200",children:y.map((a,l)=>e.jsxs("tr",{children:[e.jsx("td",{className:"px-6 py-4 whitespace-nowrap",children:e.jsx("div",{className:"text-sm text-gray-900",children:a.bill_no})}),e.jsx("td",{className:"px-6 py-4 whitespace-nowrap",children:e.jsx("div",{className:"text-sm text-gray-900",children:a.case_id})}),e.jsx("td",{className:"px-6 py-4 whitespace-nowrap",children:e.jsx("div",{className:"text-sm text-gray-900",children:a.report_date})}),e.jsx("td",{className:"px-6 py-4 whitespace-nowrap",children:e.jsx("div",{className:"text-sm text-gray-900",children:a.name})}),e.jsx("td",{className:"px-6 py-4 whitespace-nowrap",children:e.jsx("div",{className:"text-sm text-gray-900",children:a.doctor})}),e.jsx("td",{className:"px-6 py-4 whitespace-nowrap",children:e.jsx("div",{className:"text-sm text-gray-900",children:a.previous_value})}),e.jsx("td",{className:"px-6 py-4 whitespace-nowrap",children:e.jsx("div",{className:"text-sm text-gray-900",children:a.amount})}),e.jsx("td",{className:"px-6 py-4 whitespace-nowrap",children:e.jsx("div",{className:"text-sm text-gray-900",children:a.net_amount})})]},l))})]})}),e.jsx("div",{id:"exampleModal",className:n?"  fixed h-screen transform  bg-black shadow-md rounded-md g  top-0 bottom-0 right-0 left-0 w-full hidden":"fixed h-screen transform  bg-black bg-opacity-85 shadow-md rounded-md   top-0 bottom-0 right-0 left-0 w-full grid place-items-center",children:e.jsx("div",{className:"back-model w-[60%] bg-white relative ",children:e.jsxs("div",{className:"modal-content w-full",children:[e.jsxs("div",{className:"modal-header grid grid-cols-2  bg-[#0E99F4] p-2",children:[e.jsxs("div",{className:"w-[80%] ",children:[e.jsxs("div",{className:"w-[80%] flex space-x-2 px-4 mt-[0.29rem]",children:[e.jsxs("select",{value:t.patient_id,onChange:s,name:"patient_id",id:!0,className:"w-[100%] h-9",children:[e.jsx("option",{value:"",children:"Select Patient"}),j.map(a=>e.jsx("option",{value:a.id,children:a.name}))]}),e.jsxs("button",{onClick:_,className:"bg-gray-700 w-[100%] h-9  text-white rounded-md",children:[" ",e.jsx("i",{className:"fa-solid fa-plus"}),"Add Patient"]})]}),d.patient_id&&e.jsx("span",{className:"text-red-500",children:d.patient_id})]}),e.jsxs("div",{className:"flex mt-[0.40rem]",children:[e.jsx("div",{className:"flex items-center border w-[50%] h-9 border-gray-500 bg-white rounded-md ",children:e.jsx("button",{className:" text-black px-4 py-1 rounded-md",children:e.jsx(R,{})})}),e.jsx("button",{onClick:o,className:"ml-auto text-[2rem] text-white",children:e.jsx(S,{})})]})]}),e.jsxs("div",{className:"modal-body",children:[e.jsxs("div",{className:"flex justify-between w-[100%] border bg-slate-300 px-[2rem]",children:[e.jsxs("div",{className:"rowsd w-[30%] flex justify-between",children:[e.jsx("h1",{children:"Bill No PATHOB418"}),e.jsx("h1",{children:"Case ID"})]}),e.jsx("div",{className:"rowsd w-[40%] flex justify-end",children:e.jsx("h1",{children:"Date 03/01/2024 5:26 PM"})})]}),e.jsxs("form",{action:!0,className:"w-full grid grid-cols-5 gap-3 px-6 mt-10 relative",children:[e.jsxs("div",{className:"form-group w-full ",children:[e.jsx("label",{htmlFor:!0,children:"Test Name *"}),e.jsxs("select",{name:!0,id:!0,className:"w-full border-gray-300",children:[e.jsx("option",{value:!0,children:"Select Patient"}),e.jsx("option",{value:!0})]})]}),e.jsxs("div",{className:"form-group w-full",children:[e.jsx("label",{htmlFor:!0,children:" Report Days"})," ",e.jsx("br",{}),e.jsx("input",{onChange:s,name:"report_days",value:t.report_days,type:"text",className:"w-full border-gray-300"})]}),e.jsxs("div",{className:"form-group w-full",children:[e.jsx("label",{htmlFor:!0,children:" Report Date *"})," ",e.jsx("br",{}),e.jsx("input",{onChange:s,name:"report_date",value:t.report_date,type:"datetime-local",className:"w-full border-gray-300"})]}),e.jsxs("div",{className:"form-group w-full",children:[e.jsx("label",{htmlFor:!0,children:"Tax"})," ",e.jsx("br",{}),e.jsx("input",{onChange:s,name:"tax",value:t.tax,type:"text",className:"w-full border-gray-300"})]}),e.jsxs("div",{className:"form-group w-full",children:[e.jsx("label",{htmlFor:!0,children:"Amount (Rs.) "})," ",e.jsx("br",{}),e.jsx("input",{onChange:s,name:"amount",value:t.amount,type:"text",className:"w-full border-gray-300"})]})]})]}),e.jsxs("div",{className:"grid grid-cols-2 px-6 gap-3",children:[e.jsxs("div",{children:[e.jsx("div",{className:"grid grid-cols-2 gap-3",children:e.jsxs("div",{className:"form-group w-full border-gray-300",children:[e.jsx("label",{htmlFor:!0,children:" Doctor"})," ",e.jsx("br",{}),e.jsxs("select",{name:"doctor",onChange:s,value:t.doctor,id:"",children:[e.jsx("option",{value:"",children:"Select Doctor"}),m.map(a=>e.jsx("option",{value:a.id,children:a.name}))]})]})}),e.jsxs("div",{className:"form-group  mt-4 w-full border",children:[e.jsx("label",{htmlFor:"",children:"Notes"}),e.jsx("textarea",{name:"note",value:t.note,onChange:s,id:!0,rows:3,className:"px-6 w-full border-gray-300",defaultValue:""})]}),e.jsxs("div",{className:"form-group  mt-4 w-full border",children:[e.jsx("label",{htmlFor:"",children:"Previouse Report value"}),e.jsx("textarea",{name:"previous_value",value:t.previous_value,onChange:s,id:!0,rows:3,className:"px-6 w-full border-gray-300",defaultValue:""})]})]}),e.jsxs("div",{className:"content mt-4",children:[e.jsxs("div",{className:"flex justify-between",children:[e.jsx("h1",{children:"Total (Rs.)"}),e.jsx("input",{onChange:s,name:"",type:"text",defaultValue:2e3,className:"border-t-0 border-l-0 border-r-0 border-gray-300"})]}),e.jsxs("div",{className:"flex justify-between",children:[e.jsx("h1",{children:"Discount (Rs.)"}),e.jsx("input",{onChange:s,name:"discount",value:t.discount,type:"text",defaultValue:2e3,className:"border-t-0 border-l-0 border-r-0 border-gray-300"})]}),e.jsxs("div",{className:"flex justify-between",children:[e.jsx("h1",{children:"Tax (Rs.) "}),e.jsx("input",{onChange:s,name:"",type:"text",defaultValue:2e3,className:"border-t-0 border-l-0 border-r-0 border-gray-300"})]}),e.jsxs("div",{className:"flex justify-between",children:[e.jsx("h1",{children:"Net Amount (Rs.)"}),e.jsx("input",{onChange:s,name:"net_amount",value:t.net_amount,type:"text",defaultValue:2e3,className:"border-t-0 border-l-0 border-r-0 border-gray-300"})]}),e.jsxs("div",{className:"grid grid-cols-2 gap-3",children:[e.jsxs("div",{className:"form-group w-full border-gray-300",children:[e.jsx("label",{htmlFor:!0,children:"Payment Mode"})," ",e.jsx("br",{}),e.jsx("div",{className:"form-group w-full border-gray-300 mt-6",children:e.jsxs("select",{name:"payment_mode",onChange:s,value:t.payment_mode,className:" border-gray-300 w-full",children:[e.jsx("option",{value:"",children:"Select payment"}),e.jsx("option",{value:"Cash",children:"Cash"}),e.jsx("option",{value:"Credit Card",children:"Credit Card"}),e.jsx("option",{value:"Debit Card",children:"Debit Card"})]})})]}),e.jsxs("div",{className:"form-group w-full",children:[e.jsx("label",{htmlFor:!0,children:"Amount (Rs.) *"})," ",e.jsx("br",{}),e.jsx("input",{onChange:s,name:"",type:"text",className:"w-full border-gray-300"})]})]})]})]}),e.jsx("div",{className:"form-group  absolute bottom-0  left-0 right-0 mt-10 py-4",children:e.jsx("div",{className:"flex justify-end px-5 p-3 space-x-3 w-full",children:e.jsx("button",{onClick:w,className:"bg-gray-800 p-2 text-white w-[12%] ",children:"Save"})})})]})})})]})]})]})};export{V as default};
