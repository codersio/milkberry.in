import{r,j as e}from"./app-Dx-j_UOv.js";import{S as j,H as f}from"./sidebar-BA9vNQcI.js";import{F as g}from"./index-CCQNuVCj.js";import{R as y}from"./index-CT3Yx0Du.js";const _=({admin:c})=>{const[i,m]=r.useState(!0),[h,d]=r.useState([]),[a,n]=r.useState({admin_type:c.type,admin_id:c.id,vehicle_no:"",vehicle_model:"",year:"",d_name:"",d_license:"",d_contact:"",vehicle_type:"",note:""}),x=async()=>{try{const t=await axios.post("/api/admin/ambulance-list");d(t.data)}catch(t){console.error("Error fetching data:",t)}};r.useEffect(()=>{x()},[]);const l=t=>{const{name:s,value:u}=t.target;n({...a,[s]:u}),setErrors({...errors,[s]:""})},p=async t=>{t.preventDefault();try{await axios.post("/api/admin/ambulance-list-store",a),x(),n({vehicle_no:"",vehicle_model:"",year:"",d_name:"",d_license:"",d_contact:"",vehicle_type:"",note:""}),d(),Swal.fire({icon:"success",title:"Success!",text:"Form submitted successfully!"})}catch(s){console.log(s)}},o=()=>{m(!i)};return e.jsxs("div",{className:"flex h-screen",children:[e.jsx("div",{className:"bg-gray-800 text-white w-[11%] flex-shrink-0",children:e.jsx(j,{})}),e.jsxs("div",{className:"flex-grow bg-gray-100 ",children:[e.jsx(f,{}),e.jsxs("div",{className:"relative",children:[e.jsx("div",{className:"card mt-2",children:e.jsxs("div",{className:"card-header flex justify-between px-[3rem] border py-3",children:[e.jsx("div",{className:"grid place-items-center text-[18px]",children:e.jsx("h1",{children:"Ambulance List"})}),e.jsx("div",{className:"flex space-x-3",children:e.jsxs("button",{type:"button",onClick:o,className:"bg-gray-700 p-2 text-white rounded-md flex space-x-2",children:[e.jsx("div",{className:"grid place-items-center mt-1",children:e.jsx(g,{})}),e.jsx("h1",{children:" Add Ambulance"})]})})]})}),e.jsx("div",{className:"",children:e.jsxs("table",{className:"table-auto min-w-full divide-y divide-gray-200",children:[e.jsx("thead",{className:"bg-gray-50",children:e.jsxs("tr",{children:[e.jsx("th",{className:"px-6 py-3 text-left text-[11px] font-medium text-gray-500 uppercase tracking-wider",children:"Vehicle Number"}),e.jsx("th",{className:"px-6 py-3 text-left text-[11px] font-medium text-gray-500 uppercase tracking-wider",children:"Vehicle Model"}),e.jsx("th",{className:"px-6 py-3 text-left text-[11px] font-medium text-gray-500 uppercase tracking-wider",children:"Year Made"}),e.jsx("th",{className:"px-6 py-3 text-left text-[11px] font-medium text-gray-500 uppercase tracking-wider",children:"Driver Name"}),e.jsx("th",{className:"px-6 py-3 text-left text-[11px] font-medium text-gray-500 uppercase tracking-wider",children:"Driver License"}),e.jsx("th",{className:"px-6 py-3 text-left text-[11px] font-medium text-gray-500 uppercase tracking-wider",children:"Driver Contact No"}),e.jsx("th",{className:"px-6 py-3 text-left text-[11px] font-medium text-gray-500 uppercase tracking-wider",children:"Note"}),e.jsx("th",{className:"px-6 py-3 text-left text-[11px] font-medium text-gray-500 uppercase tracking-wider",children:"Vehicle Type"})]})}),e.jsx("tbody",{className:"bg-white divide-y divide-gray-200",children:h.map(t=>e.jsxs("tr",{children:[e.jsx("td",{className:"px-6 py-3 text-left",children:t.vehicle_no}),e.jsx("td",{className:"px-6 py-3 text-left",children:t.vehicle_model}),e.jsx("td",{className:"px-6 py-3 text-left",children:t.year}),e.jsx("td",{className:"px-6 py-3 text-left",children:t.d_name}),e.jsx("td",{className:"px-6 py-3 text-left",children:t.d_license}),e.jsx("td",{className:"px-6 py-3 text-left",children:t.d_contact}),e.jsx("td",{className:"px-6 py-3 text-left",children:t.note}),e.jsx("td",{className:"px-6 py-3 text-left",children:t.vehicle_type})]}))})]})}),e.jsx("div",{id:"exampleModal",className:i?"  fixed h-screen transform  bg-black shadow-md rounded-md g  top-0 bottom-0 right-0 left-0 w-full hidden":"fixed h-screen transform  bg-black bg-opacity-85 shadow-md rounded-md   top-0 bottom-0 right-0 left-0 w-full grid place-items-center",children:e.jsx("div",{className:"back-model w-[60%] bg-white relative ",children:e.jsxs("div",{className:"modal-content w-full",children:[e.jsxs("div",{className:"modal-header grid grid-cols-2  bg-[#0E99F4] p-2",children:[e.jsx("div",{className:"w-[80%] flex space-x-2 px-4 mt-[0.29rem]",children:e.jsx("h1",{className:"text-[1.5rem] text-white",children:" Add Ambulance"})}),e.jsx("div",{className:"flex mt-[0.40rem]",children:e.jsx("button",{onClick:o,className:"ml-auto text-[2rem] text-white",children:e.jsx(y,{})})})]}),e.jsxs("div",{className:"modal-body",children:[e.jsx("input",{name:"admin_type",value:a.admin_type,onChange:l,type:"hidden",className:" border-gray-300 w-full"}),e.jsx("input",{name:"admin_id",value:a.admin_id,onChange:l,type:"hidden",className:" border-gray-300 w-full"}),e.jsxs("form",{action:!0,className:"w-full grid grid-cols-3 gap-3 px-6 mt-10 relative",children:[e.jsxs("div",{className:"form-group w-full ",children:[e.jsx("label",{htmlFor:!0,children:"Vehicle Number *"}),e.jsx("input",{onChange:l,value:a.vehicle_no,name:"vehicle_no",type:"text",className:"w-full border-gray-300"})]}),e.jsxs("div",{className:"form-group w-full",children:[e.jsx("label",{htmlFor:!0,children:" Vehicle Model *"})," ",e.jsx("br",{}),e.jsx("input",{onChange:l,value:a.vehicle_model,name:"vehicle_model",type:"text",className:"w-full border-gray-300"})]}),e.jsxs("div",{className:"form-group w-full",children:[e.jsx("label",{htmlFor:!0,children:"Year Made"})," ",e.jsx("br",{}),e.jsx("input",{onChange:l,value:a.year,name:"year",type:"text",className:"w-full border-gray-300"})]}),e.jsxs("div",{className:"form-group w-full",children:[e.jsx("label",{htmlFor:!0,children:"Driver Name "})," ",e.jsx("br",{}),e.jsx("input",{onChange:l,value:a.d_name,name:"d_name",type:"text",className:"w-full border-gray-300"})]}),e.jsxs("div",{className:"form-group w-full border-gray-300",children:[e.jsx("label",{htmlFor:!0,children:"Driver License"})," ",e.jsx("br",{}),e.jsx("input",{onChange:l,value:a.d_license,name:"d_license",type:"text",className:"w-full border-gray-300"})]}),e.jsxs("div",{className:"form-group w-full",children:[e.jsx("label",{htmlFor:!0,children:"Driver Contact"})," ",e.jsx("br",{}),e.jsx("input",{onChange:l,value:a.d_contact,name:"d_contact",type:"text",className:"w-full border-gray-300"})]})]})]}),e.jsxs("div",{className:"grid grid-cols-2 px-6 gap-3",children:[e.jsxs("div",{className:"form-group  mt-4 w-full ",children:[e.jsx("label",{htmlFor:"",children:"Vehicle Type *"})," ",e.jsx("br",{}),e.jsxs("select",{onChange:l,value:a.vehicle_type,name:"vehicle_type",id:"",className:"px-6 w-full border-gray-300",children:[e.jsx("option",{value:"",children:"select"}),e.jsx("option",{value:"Contractual",children:"Contractual"}),e.jsx("option",{value:"owned",children:"owned"})]})]}),e.jsxs("div",{className:"form-group  mt-4 w-full ",children:[e.jsx("label",{htmlFor:"",children:"Note"}),e.jsx("textarea",{onChange:l,value:a.note,name:"note",id:!0,rows:3,className:"px-6 w-full border-gray-300",defaultValue:""})]})]}),e.jsx("div",{className:"form-group   bottom-0  left-0 right-0 mt-10 py-4",children:e.jsx("div",{className:"flex justify-end px-5 p-3 space-x-3 w-full",children:e.jsx("button",{onClick:p,className:"bg-gray-800 p-2 text-white w-[12%] ",children:"Save"})})})]})})})]})]})]})};export{_ as default};
