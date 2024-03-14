import{r as c,j as e}from"./app-BIZ3IliG.js";import{S as D,H as A,c as M}from"./sidebar-CX1c2OX3.js";import{F as P}from"./index-Bj6Ssh9F.js";import{R as b}from"./index-CccxSFAp.js";import{f as T}from"./index-B4D-UyGZ.js";import"./index-kmbyLHGu.js";const H=({admin:o})=>{const[d,y]=c.useState(!0),[m,x]=c.useState(null),[p,E]=c.useState(o.type),[h,q]=c.useState(o.id),[u,f]=c.useState(""),[t,g]=c.useState({cml_name:"",cml_source:"",cml_by:"",cml_phone:"",cml_date:"",cml_description:"",cml_token:"",cml_assigned:"",cml_note:""}),[_,v]=c.useState([]),r=l=>{const{name:s,value:a}=l.target;g({...t,[s]:a})},j=()=>{y(!d)},w=()=>{x(!m)},N=l=>{const{name:s,value:a,type:i,files:S}=l.target;S.length>0&&f(l.target.files[0])},n=()=>{axios.post("/api/admin/complain-fetch").then(l=>{console.log(l.data),v(l.data)}).catch(l=>{console.log(l)})};c.useEffect(()=>{n()},[]);const k=l=>{l.preventDefault();const s=new FormData;s.append("cml_name",t.cml_name),s.append("cml_source",t.cml_source),s.append("cml_by",t.cml_by),s.append("cml_phone",t.cml_phone),s.append("cml_date",t.cml_date),s.append("cml_description",t.cml_description),s.append("cml_token",t.cml_token),s.append("cml_assigned",t.cml_assigned),s.append("cml_note",t.cml_note),s.append("cml_atach_file",u),s.append("admin_type",p),s.append("admin_id",h),axios.post("/api/admin/complain-store",s,{headers:{"Content-Type":"multipart/form-data"}}).then(a=>{n()}).catch(a=>console.log(a))},C=(l,s)=>{l.preventDefault(),axios.delete(`/api/admin/complain-delete/${s}`).then(a=>{console.log(a),n()}).catch(a=>console.log(a))},F=(l,s)=>{l.preventDefault();const a=new FormData;a.append("cml_name",t.cml_name),a.append("cml_source",t.cml_source),a.append("cml_by",t.cml_by),a.append("cml_phone",t.cml_phone),a.append("cml_date",t.cml_date),a.append("cml_description",t.cml_description),a.append("cml_token",t.cml_token),a.append("cml_assigned",t.cml_assigned),a.append("cml_note",t.cml_note),a.append("cml_atach_file",u),a.append("admin_type",p),a.append("admin_id",h),axios.post(`/api/admin/complain-update/${s}`,a).then(i=>n()).catch(i=>console.log(i))};return e.jsxs("div",{className:"flex h-screen",children:[e.jsx("div",{className:"bg-gray-800 text-white w-[11%] flex-shrink-0",children:e.jsx(D,{})}),e.jsxs("div",{className:"flex-grow bg-gray-100 ",children:[e.jsx(A,{}),e.jsxs("div",{className:"relative",children:[e.jsx("div",{className:"card mt-2",children:e.jsxs("div",{className:"card-header flex justify-between px-[3rem] border py-3",children:[e.jsx("div",{className:"grid place-items-center text-[18px]",children:e.jsx("h1",{children:"Complain List"})}),e.jsxs("button",{type:"button",onClick:j,className:"bg-gray-700 p-2 text-white rounded-md flex space-x-2",children:[e.jsx("div",{className:"grid place-items-center mt-1",children:e.jsx(P,{})}),e.jsx("h1",{children:"Add Complain "})]})]})}),e.jsx("div",{className:"overflow-x-auto",children:e.jsxs("table",{className:"table-auto min-w-full divide-y divide-gray-200",children:[e.jsx("thead",{className:"bg-gray-50",children:e.jsxs("tr",{children:[e.jsx("th",{className:"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider",children:"Complain #"}),e.jsx("th",{className:"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider",children:"Complain Type"}),e.jsx("th",{className:"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider",children:"Source"}),e.jsx("th",{className:"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider",children:"Name"}),e.jsx("th",{className:"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider",children:"Phone"}),e.jsx("th",{className:"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider",children:"Date"}),e.jsx("th",{className:"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider",children:"Action"})]})}),e.jsxs("tbody",{className:"bg-white divide-y divide-gray-200",children:[_.map((l,s)=>e.jsxs("tr",{children:[e.jsx("td",{className:"px-6 py-3 text-left text-xs",children:l.cml_no}),e.jsx("td",{className:"px-6 py-3 text-left text-xs",children:l.cml_name}),e.jsx("td",{className:"px-6 py-3 text-left text-xs",children:l.cml_source}),e.jsx("td",{className:"px-6 py-3 text-left text-xs",children:l.cml_name}),e.jsx("td",{className:"px-6 py-3 text-left text-xs",children:l.cml_phone}),e.jsx("td",{className:"px-6 py-3 text-left text-xs",children:l.cml_date}),e.jsxs("td",{className:"px-6 py-3 text-left text-xs flex space-x-2",children:[e.jsx("a",{onClick:()=>{g({id:l.id,cml_phone:l.cml_phone,cml_name:l.cml_name,cml_source:l.cml_source,cml_by:l.cml_by,cml_phone:l.cml_phone,cml_date:l.cml_date,cml_description:l.cml_description,cml_token:l.cml_token,cml_assigned:l.cml_assigned,cml_note:l.cml_note,cml_atach_file:l.cml_name}),x(l.id)},children:e.jsx(M,{className:"text-[1.3rem] cursor-pointer"})}),e.jsx("a",{onClick:a=>C(a,l.id),children:e.jsx(T,{className:"text-[1.1rem] cursor-pointer"})})]}),e.jsx("div",{id:`exampleModal-${l.id}`,className:m===l.id?"fixed h-screen transform  bg-black bg-opacity-85 shadow-md rounded-md   top-0 bottom-0 right-0 left-0 w-full grid place-items-center ":"fixed h-screen transform  bg-black bg-opacity-85 shadow-md rounded-md   top-0 bottom-0 right-0 left-0 w-full hidden place-items-center",children:e.jsx("div",{className:"back-model w-[60%] bg-white relative ",children:e.jsxs("div",{className:"modal-content w-full",children:[e.jsxs("div",{className:"modal-header flex justify-between   bg-[#0E99F4] p-2",children:[e.jsx("div",{className:"w-[80%]  px-4 mt-[0.29rem]",children:e.jsxs("h1",{className:"text-white text-[2rem]",children:["update Complain ",l.id]})}),e.jsx("button",{onClick:w,className:"ml-auto text-[2rem] text-white",children:e.jsx(b,{})})]}),e.jsxs("div",{className:"modal-body",children:[e.jsxs("form",{action:!0,className:"w-full grid grid-cols-3 gap-5 px-6 mt-10 relative",children:[e.jsxs("div",{className:"form-group w-full ",children:[e.jsx("label",{htmlFor:!0,children:"Complain Name"}),e.jsxs("select",{onChange:r,name:"cml_name",value:t.cml_name,id:!0,className:"w-full border-gray-300",children:[e.jsx("option",{value:!0,children:"Select complain"}),e.jsx("option",{value:"1",children:"Food quality"})]})]}),e.jsxs("div",{className:"form-group w-full ",children:[e.jsx("label",{htmlFor:!0,children:"Complain Type"}),e.jsxs("select",{onChange:r,name:"cml_source",value:t.cml_source,id:!0,className:"w-full border-gray-300",children:[e.jsx("option",{value:!0,children:"Select Source"}),e.jsx("option",{value:"1",children:"Food quality"})]})]}),e.jsxs("div",{className:"form-group w-full",children:[e.jsx("label",{htmlFor:!0,children:" Complain By *"})," ",e.jsx("br",{}),e.jsx("input",{onChange:r,name:"cml_by",value:t.cml_by,type:"text",className:"w-full border-gray-300"})]}),e.jsxs("div",{className:"form-group w-full",children:[e.jsx("label",{htmlFor:!0,children:" Phone *"})," ",e.jsx("br",{}),e.jsx("input",{onChange:r,name:"cml_phone",value:t.cml_phone,type:"text",className:"w-full border-gray-300"})]}),e.jsxs("div",{className:"form-group w-full",children:[e.jsx("label",{htmlFor:!0,children:"Date"})," ",e.jsx("br",{}),e.jsx("input",{type:"text",onChange:r,name:"cml_date",value:t.cml_date,className:"w-full border-gray-300"})]}),e.jsxs("div",{className:"form-group w-full",children:[e.jsx("label",{htmlFor:!0,children:"Action Taken "})," ",e.jsx("br",{}),e.jsx("input",{type:"text",onChange:r,name:"cml_token",value:t.cml_token,className:"w-full border-gray-300"})]}),e.jsxs("div",{className:"form-group w-full",children:[e.jsx("label",{htmlFor:!0,children:"Assigned"})," ",e.jsx("br",{}),e.jsx("input",{type:"text",onChange:r,name:"cml_assigned",value:t.cml_assigned,className:"w-full border-gray-300"})]}),e.jsxs("div",{className:"form-group w-full",children:[e.jsx("label",{htmlFor:!0,children:"Patients Photo"})," ",e.jsx("br",{}),e.jsx("div",{class:"flex items-center justify-center w-full",children:e.jsxs("label",{for:"dropzone-file",class:"flex flex-col items-center justify-center w-full h-[2.5rem] border-2 border-gray-300 border-dashed  cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600",children:[e.jsx("div",{class:"flex flex-col items-center justify-center mt-4",children:e.jsx("svg",{class:"w-8 h-8 mb-4 text-gray-500 dark:text-gray-400","aria-hidden":"true",xmlns:"http://www.w3.org/2000/svg",fill:"none",viewBox:"0 0 20 16",children:e.jsx("path",{stroke:"currentColor","stroke-linecap":"round","stroke-linejoin":"round","stroke-width":"2",d:"M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"})})}),e.jsx("input",{name:"cml_atach_file",onChange:N,id:"dropzone-file",type:"file",class:"hidden"})]})})]})]}),e.jsxs("div",{className:"form-group w-full px-6 mt-3",children:[e.jsx("label",{htmlFor:!0,children:"Description"})," ",e.jsx("br",{}),e.jsx("textarea",{onChange:r,value:t.cml_description,name:"cml_description",type:"date",className:"w-full border-gray-300"})]}),e.jsxs("div",{className:"form-group w-full px-6 mt-3",children:[e.jsx("label",{htmlFor:!0,children:"Note"})," ",e.jsx("br",{}),e.jsx("textarea",{onChange:r,value:t.cml_note,name:"cml_note",type:"date",className:"w-full border-gray-300"})]})]}),e.jsx("div",{className:"form-group   bottom-0  left-0 right-0 mt-10 py-4",children:e.jsx("div",{className:"flex justify-end px-5 p-3 space-x-3 w-full",children:e.jsx("button",{onClick:a=>F(a,l.id),className:"bg-gray-800 p-2 text-white w-[12%] ",children:"Save"})})})]})})},l.id)]})),e.jsx("tr",{children:e.jsx("td",{})})]})]})}),e.jsx("div",{id:"exampleModal",className:d?"  fixed h-screen transform  bg-black shadow-md rounded-md g  top-0 bottom-0 right-0 left-0 w-full hidden":"fixed h-screen transform  bg-black bg-opacity-85 shadow-md rounded-md   top-0 bottom-0 right-0 left-0 w-full grid place-items-center",children:e.jsx("div",{className:"back-model w-[60%] bg-white relative ",children:e.jsxs("div",{className:"modal-content w-full",children:[e.jsxs("div",{className:"modal-header flex justify-between   bg-[#0E99F4] p-2",children:[e.jsx("div",{className:"w-[80%]  px-4 mt-[0.29rem]",children:e.jsx("h1",{className:"text-white text-[2rem]",children:"Add Visitor"})}),e.jsx("button",{onClick:j,className:"ml-auto text-[2rem] text-white",children:e.jsx(b,{})})]}),e.jsxs("div",{className:"modal-body",children:[e.jsxs("form",{action:!0,className:"w-full grid grid-cols-3 gap-5 px-6 mt-10 relative",children:[e.jsxs("div",{className:"form-group w-full ",children:[e.jsx("label",{htmlFor:!0,children:"Complain Name"}),e.jsxs("select",{onChange:r,name:"cml_name",value:t.cml_name,id:!0,className:"w-full border-gray-300",children:[e.jsx("option",{value:!0,children:"Select complain"}),e.jsx("option",{value:"1",children:"Food quality"})]})]}),e.jsxs("div",{className:"form-group w-full ",children:[e.jsx("label",{htmlFor:!0,children:"Complain Type"}),e.jsxs("select",{onChange:r,name:"cml_source",value:t.cml_source,id:!0,className:"w-full border-gray-300",children:[e.jsx("option",{value:!0,children:"Select Source"}),e.jsx("option",{value:"1",children:"Food quality"})]})]}),e.jsxs("div",{className:"form-group w-full",children:[e.jsx("label",{htmlFor:!0,children:" Complain By *"})," ",e.jsx("br",{}),e.jsx("input",{onChange:r,name:"cml_by",value:t.cml_by,type:"text",className:"w-full border-gray-300"})]}),e.jsxs("div",{className:"form-group w-full",children:[e.jsx("label",{htmlFor:!0,children:" Phone *"})," ",e.jsx("br",{}),e.jsx("input",{onChange:r,name:"cml_phone",value:t.cml_phone,type:"text",className:"w-full border-gray-300"})]}),e.jsxs("div",{className:"form-group w-full",children:[e.jsx("label",{htmlFor:!0,children:"Date"})," ",e.jsx("br",{}),e.jsx("input",{type:"text",onChange:r,name:"cml_date",value:t.cml_date,className:"w-full border-gray-300"})]}),e.jsxs("div",{className:"form-group w-full",children:[e.jsx("label",{htmlFor:!0,children:"Action Taken "})," ",e.jsx("br",{}),e.jsx("input",{type:"text",onChange:r,name:"cml_token",value:t.cml_token,className:"w-full border-gray-300"})]}),e.jsxs("div",{className:"form-group w-full",children:[e.jsx("label",{htmlFor:!0,children:"Assigned"})," ",e.jsx("br",{}),e.jsx("input",{type:"text",onChange:r,name:"cml_assigned",value:t.cml_assigned,className:"w-full border-gray-300"})]}),e.jsxs("div",{className:"form-group w-full",children:[e.jsx("label",{htmlFor:!0,children:"Patients Photo"})," ",e.jsx("br",{}),e.jsx("div",{class:"flex items-center justify-center w-full",children:e.jsxs("label",{for:"dropzone-file",class:"flex flex-col items-center justify-center w-full h-[2.5rem] border-2 border-gray-300 border-dashed  cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600",children:[e.jsx("div",{class:"flex flex-col items-center justify-center mt-4",children:e.jsx("svg",{class:"w-8 h-8 mb-4 text-gray-500 dark:text-gray-400","aria-hidden":"true",xmlns:"http://www.w3.org/2000/svg",fill:"none",viewBox:"0 0 20 16",children:e.jsx("path",{stroke:"currentColor","stroke-linecap":"round","stroke-linejoin":"round","stroke-width":"2",d:"M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"})})}),e.jsx("input",{name:"cml_atach_file",onChange:l=>f(l.target.files[0]),id:"dropzone-file",type:"file",class:"hidden"})]})})]})]}),e.jsxs("div",{className:"form-group w-full px-6 mt-3",children:[e.jsx("label",{htmlFor:!0,children:"Description"})," ",e.jsx("br",{}),e.jsx("textarea",{onChange:r,value:t.cml_description,name:"cml_description",type:"date",className:"w-full border-gray-300"})]}),e.jsxs("div",{className:"form-group w-full px-6 mt-3",children:[e.jsx("label",{htmlFor:!0,children:"Note"})," ",e.jsx("br",{}),e.jsx("textarea",{onChange:r,value:t.cml_note,name:"cml_note",type:"date",className:"w-full border-gray-300"})]})]}),e.jsx("div",{className:"form-group   bottom-0  left-0 right-0 mt-10 py-4",children:e.jsx("div",{className:"flex justify-end px-5 p-3 space-x-3 w-full",children:e.jsx("button",{onClick:k,className:"bg-gray-800 p-2 text-white w-[12%] ",children:"Save"})})})]})})})]})]})]})};export{H as default};
