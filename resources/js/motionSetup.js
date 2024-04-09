import { useMotion } from "@vueuse/motion";
import { ref } from "vue";

export function useGlobalMotion() {
    const fromRight = ref()
    const fromLeft = ref()
    const fromBottom = ref();
    const opacity = ref()

    useMotion(fromBottom, {
        initial: { opacity: 0, y: 100 },
        visibleOnce: {
            opacity: 1,
            y: 0,
            transition: {
                type: "spring",
                stiffness: "100",
                delay: 500,
            },
        },
    });

    useMotion(fromRight, {
        initial: { opacity: 0, x: 100 },
        visibleOnce: {
            opacity: 1,
            x: 0,
            transition: {
                type: "spring",
                stiffness: "100",
                delay: 500,
            },
        },
    });
    useMotion(fromLeft, {
        initial: { opacity: 0, x: -100 },
        visibleOnce: {
            opacity: 1,
            x: 0,
            transition: {
                type: "spring",
                stiffness: "100",
                delay: 500,
            },
        },
    });
 
 
    useMotion(opacity, {
        initial: { opacity: 0, },
        visibleOnce: {
            opacity: 1,
            transition: {
                type: "spring",
                stiffness: "100",
                delay: 500,
            },
        },
    });

    return { fromRight,fromLeft,fromBottom,opacity, };
}
