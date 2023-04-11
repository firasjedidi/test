import React,{useState} from 'react'
import axios from 'axios'
const test = () => {

  return (
    <div>
      <a href='http://localhost:5000/'>auth</a>
      <button onClick={handelClick}>sites</button>  
      {sites.length   ? (
        <>
        <select onChange={handelChange} defaultValue={1} name="siteUrl">
          ${sites.map((elem,index)=>(
            <option key={index} value={elem.siteUrl} >{elem.siteUrl}</option>  
            ))
          }
        </select>
        <input onChange={handelChange} type={"text"} name="inspect" />
        <button onClick={handel}>check</button>
         </>
      ): ""}
     
    </div>
  )
}

export default test