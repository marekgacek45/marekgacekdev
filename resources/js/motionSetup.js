import { useMotion } from "@vueuse/motion";
import { ref } from "vue";

export function useGlobalMotion() {
    const textRight = ref()
    const textLeft = ref()
    const imgBottom =ref()
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

    useMotion(textRight, {
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
    useMotion(textLeft, {
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
 
    useMotion(imgBottom, {
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

    return { textRight,textLeft,imgBottom,opacity,fromBottom };
}
