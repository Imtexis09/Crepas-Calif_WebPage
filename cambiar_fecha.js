/* Método 2: JS+NPM */
import dayjs from "dayjs";

const now = dayjs(); // Objeto de fecha dayjs (con la fecha actual)

const isoDate = dayjs("2022-11-30T16:45:00.005Z"); // Formato ISO 8601

const date = dayjs(new Date(2022, 0, 30)); // 30-1-22 con Date nativo

