import{r as s,j as e}from"./app-BIZ3IliG.js";import{S as v,H as b}from"./sidebar-CX1c2OX3.js";import{F as w}from"./index-Bj6Ssh9F.js";import"./sweetalert2.all-DwNYEVuA.js";import"./index-kmbyLHGu.js";import"./index-B4D-UyGZ.js";const P=({admin:a})=>{const[x,o]=s.useState(null),[i,l]=s.useState(0),[m,N]=s.useState(a.type),[d,p]=s.useState(""),[h,k]=s.useState(a.id),[c,g]=s.useState(""),[n,u]=s.useState(""),y=t=>{o(t.target.files[0])},f=()=>{const t=new FormData;t.append("csv_file",x),t.append("admin_type",m),t.append("admin_id",h),t.append("category_id",d),axios.post("/api/admin/medicine-store-csv",t,{headers:{"Content-Type":"multipart/form-data"},onUploadProgress:r=>{const j=Math.round(r.loaded*100/r.total);l(j)}}).then(r=>{console.log(r.data.message),g("CSV data imported successfully"),u(""),l(0)}).catch(r=>{console.error("Error importing CSV:",r)})};return e.jsxs("div",{className:"flex h-screen",children:[e.jsx("div",{className:"bg-gray-800 text-white w-[11%] flex-shrink-0",children:e.jsx(v,{})}),e.jsxs("div",{className:"flex-grow bg-gray-100 ",children:[e.jsx(b,{}),e.jsxs("div",{className:"relative",children:[e.jsx("div",{className:"card mt-2",children:e.jsxs("div",{className:"card-header flex justify-between px-[3rem] border py-3",children:[e.jsx("div",{className:"grid place-items-center text-[18px]",children:e.jsx("h1",{children:"CsvImport Bill"})}),e.jsxs("button",{type:"button",className:"bg-gray-700 p-2 text-white rounded-md flex space-x-2",children:[e.jsx("div",{className:"grid place-items-center mt-1",children:e.jsx(w,{})}),e.jsx("h1",{children:"Import Sample Data download"})]})]})}),e.jsxs("div",{className:"overflow-x-auto",children:[e.jsxs("table",{className:"table-auto min-w-full divide-y divide-gray-200",children:[e.jsx("thead",{className:"bg-gray-50",children:e.jsxs("tr",{children:[e.jsx("th",{className:"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider",children:"Medicine name"}),e.jsx("th",{className:"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider",children:"Company"}),e.jsx("th",{className:"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider",children:"Group"}),e.jsx("th",{className:"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider",children:"Unit"}),e.jsx("th",{className:"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider",children:"Min Level"}),e.jsx("th",{className:"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider",children:"ReOrder livel"}),e.jsx("th",{className:"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider",children:"Tax"}),e.jsx("th",{className:"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider",children:"Vat"}),e.jsx("th",{className:"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider",children:"Sale Price"}),e.jsx("th",{className:"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider",children:"note"}),e.jsx("th",{className:"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider",children:"unit/Packages"})]})}),e.jsx("tbody",{className:"bg-white divide-y divide-gray-200"})]}),e.jsxs("div",{className:"grid grid-cols-2 px-6 mt-4 gap-4",children:[e.jsxs("div",{className:"form-group",children:[e.jsx("label",{htmlFor:"",children:"Medicine Category"}),e.jsx("br",{}),e.jsxs("select",{value:d,onChange:t=>p(t.target.value),name:"category_id",id:"",className:"border-gray-300 w-full",children:[e.jsx("option",{value:"",children:"Select Category"}),e.jsx("option",{value:"1",children:"Syrup"})]})]}),e.jsxs("div",{className:"form-group w-full",children:[e.jsx("label",{htmlFor:!0,children:"Select CSV File *"})," ",e.jsx("br",{}),e.jsx("div",{class:"flex items-center justify-center w-full",children:e.jsxs("label",{for:"dropzone-file",class:"flex flex-col items-center justify-center w-full h-[2.5rem] border-2 border-gray-300 border-dashed  cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600",children:[e.jsx("div",{class:"flex flex-col items-center justify-center mt-4",children:e.jsx("svg",{class:"w-8 h-8 mb-4 text-gray-500 dark:text-gray-400","aria-hidden":"true",xmlns:"http://www.w3.org/2000/svg",fill:"none",viewBox:"0 0 20 16",children:e.jsx("path",{stroke:"currentColor","stroke-linecap":"round","stroke-linejoin":"round","stroke-width":"2",d:"M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"})})}),e.jsx("input",{onChange:y,id:"dropzone-file",name:"csv_file",type:"file",class:"hidden"})]})}),e.jsx("button",{onClick:f,className:"bg-gray-700 p-2 text-white rounded-md flex space-x-2 mt-3",children:"Import"}),i>0&&e.jsxs("div",{children:["Progress: ",i,"%"]}),c&&e.jsx("div",{className:"success-message text-green-700",children:c}),n&&e.jsx("div",{className:"error-message",children:n})]})]})]})]})]})]})};export{P as default};