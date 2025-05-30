import { createContext, useContext, useEffect, useState } from "react";
import api from "../api/axios";

export const ApiContext = createContext();
export const ApiProvider = ({children}) => {
    const [szavak, setSzavak] = useState([]);
    const [tema, setTema] = useState([]);

    const getAdat = async (vegpont, asyFgv) => {
        try {
            const response = await api.get(vegpont);
            asyFgv([...response.data])
        }catch (err){
            console.log(err);
            console.log(vegpont);
        }
    };

    useEffect(() => {
        getAdat('/szavak', setSzavak);
        getAdat('/tema', setTema);
    });

    return(
        <ApiContext.Provider value={{ szavak, tema, getAdat, setSzavak }}> {children} </ApiContext.Provider>
    );
    
};

export default function useApiContext(){
    return useContext(ApiContext);
}